<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersServices
{
    // Create a new user
    public function createUser($name, $email, $password, $referred_by_id)
    {
        return User::create([
            'uuid' => Str::orderedUuid()->toString(),
            'referral_id' => Str::orderedUuid()->toString(),
            'referred_by_id' => $referred_by_id,
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);
    }

    /**
     * Check how many users are referred by the authenticated user.
     *
     * @return array
     */
    public function checkUserReferrals()
    {
        // Get the referral_id of the authenticated user
        $referralId = Auth::user()->referral_id;

        // Find users referred by the authenticated user
        $referredUsers = User::where('referred_by_id', $referralId)->get();

        // Count total referred users
        $totalReferred = $referredUsers->count();

        // Count active referred users (days_left > 0)
        $activeReferred = $referredUsers->where('days_left', '>', 0)->count();

        return json_decode(json_encode([
            'referral_id' => $referralId,
            'total_referred' => $totalReferred,
            'active_referred' => $activeReferred,
        ]));
    }
}
