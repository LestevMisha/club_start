<?php

namespace App\Http\Controllers\Pages\Public;

use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\RateLimiterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ResetPasswordController extends RateLimiterController
{

    /* +++++++++++++++++++ PUBLIC SECTION +++++++++++++++++++ */
    /**
     * Handle an password reset attempt.
     * Rate limiting is exempted here, since there's no need to limit a person doing a password reset.
     */
    public function resetPassword(Request $request)
    {
        // 1. Rate limiting (up to 5 attempts)
        $throttleKey = $this->generateThrottleKey("resetPassword", "email", $request);
        $executed = $this->rateLimiter($throttleKey, "password", 5, 300);
        if ($executed) return $executed;

        // 2. Validation
        $validator = Validator::make($request->all(), [
            'email' => "required|email",
            'password' => "required|min:8|confirmed",
        ]);
        if ($validator->fails()) return $this->respond->renderValidatorErrors("partials._input-error-message", $validator);

        // 2. Reset attempt
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
                $user->save();
                event(new PasswordReset($user));

                // ✅ Auto-login user
                Auth::login($user);
            }
        );


        // Default authentication error
        return $status === Password::PASSWORD_RESET
            ? redirect()->route("private.dashboard")
            : $this->respond->renderMessage("partials._modal-error-message", __("login.invalid_credentials"));
    }


    /* +++++++++++++++++++ INITIALIZATION +++++++++++++++++++ */
    public function __invoke(string $token)
    {
        return view("pages.public.reset-password.bundled", ["token" => $token]);
    }
}
