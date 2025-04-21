<?php

namespace App\Services;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Password;

class PasswordServices
{
    // Generate password reset link
    public function generatePasswordResetLink(object $user) {
        // Generate password reset token
        $token = Password::createToken($user);

        $link = URL::route("password.reset", [
            "token" => $token,
            "email" => $user->email,
        ]);

        return $link;
    }
}
