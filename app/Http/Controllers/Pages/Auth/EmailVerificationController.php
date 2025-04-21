<?php

namespace App\Http\Controllers\Pages\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class EmailVerificationController extends Controller
{
    public function __invoke($id, $hash) {

        $userServices = app(\App\Services\Models\UserServices::class);
        $user = $userServices->canVerifyEmail("id", $id);
    
        // Manually verify the hash
        if (!hash_equals((string) $hash, sha1($user->getEmailForVerification()))) return abort(403);
    
        // 🔐 Log the user in automatically
        $user->markEmailAsVerified();
        Auth::login($user);
    
        // Generate password reset token
        $token = Password::createToken($user);
    
        $resetUrl = URL::route("password.reset", [
            "token" => $token,
            "email" => $user->email,
        ]);
    
        return redirect($resetUrl);
    }
}
