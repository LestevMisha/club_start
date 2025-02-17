<?php

namespace App\Services\Models;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserServices
{
    // Create a new user
    public function createUser($data, $password): User
    {
        // Inject defaults
        $defaults = [
            'uuid' => Str::orderedUuid()->toString(),
            'referral_uuid' => Str::orderedUuid()->toString(),
            'password' => Hash::make($password),
        ];

        // Merge incoming data with defaults
        $mergedData = array_merge($defaults, $data);

        // Create and return
        return User::create($mergedData);
    }

    // Delete a user
    public function deleteUser($email)
    {
        session()->flush();
        return User::where("email", $email)->delete();
    }

    public function updateUser(array $data, $whereKey, $whereValue): User
    {
        // Update the user and return the updated instance
        $user = User::where($whereKey, $whereValue)->first();
        $user->update($data);
        return $user;
    }

    public function getUser($whereKey, $whereValue): User|null
    {
        // Return user instance
        return User::where($whereKey, $whereValue)->first();
    }

    /**
     * Check how many users are referred by the authenticated user.
     *
     * @return array
     */
    public function checkUserReferrals()
    {
        // Get the referral_uuid of the authenticated user
        $referral_uuid = Auth::user()->referral_uuid;

        // Find users referred by the authenticated user
        $referredUsers = User::where('referred_by_uuid', $referral_uuid)->get();

        // Count total referred users
        $totalReferred = $referredUsers->count();

        // Count active referred users (days_left > 0)
        $activeReferred = $referredUsers->where('days_left', '>', 0)->count();

        return json_decode(json_encode([
            'referral_uuid' => $referral_uuid,
            'total_referred' => $totalReferred,
            'active_referred' => $activeReferred,
        ]));
    }
}
