<?php

namespace App\Services\Models;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserServices
{
    // Creates a new user
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
        return User::create($mergedData);
    }


    // Updates user and return the updated instance
    public function updateUser(array $data, $whereKey, $whereValue): User
    {
        // Observe the user
        $user = User::where($whereKey, $whereValue)->first();
        $user->update($data);
        return $user;
    }


    // Returns user instance
    public function getUser($whereKey, $whereValue): User|null
    {
        return User::where($whereKey, $whereValue)->first();
    }

    // Returns all matched user instances
    public function getUsers($whereKey, $whereValue, string $order = "desc"): Collection|null
    {
        return User::where($whereKey, $whereValue)->orderBy("created_at", $order)->get();
    }


    // Checks how many users are referred by the authenticated user.
    public function checkUserReferrals(object $user)
    {
        // Get the referral_uuid of the authenticated user
        $referral_uuid = $user->referral_uuid;

        // Find users referred by the authenticated user
        $referredUsers = User::where('referred_by_uuid', $referral_uuid)->get();

        // Count total referred users
        $totalReferred = $referredUsers->count();

        // Count active referred users (days_left > 0)
        $activeReferred = $referredUsers->where('days_left', '>', 0)->where("is_subscribed", "=", 1)->count();

        return json_decode(json_encode([
            'referral_uuid' => $referral_uuid,
            'total_referred' => $totalReferred,
            'active_referred' => $activeReferred,
        ]));
    }


    // Checks email verification eligibility
    public function canVerifyEmail($whereKey, $whereValue)
    {
        $user = $this->getUser($whereKey, $whereValue);

        if (
            $user &&
            $user->is_subscribed &&
            $user->days_left > 0 &&
            !$user->email_verified_at &&
            !$user->password
        ) {
            return $user;
        }

        return abort(403);
    }
}
