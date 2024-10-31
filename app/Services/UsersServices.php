<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersServices
{
    // Create a new user
    public function createUser($name, $email, $password, $referral_id)
    {
        return User::create([
            'uuid' => Str::orderedUuid()->toString(),
            'referral_id' => Str::orderedUuid()->toString(),
            'referred_by_id' => $referral_id,
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);
    }
}
