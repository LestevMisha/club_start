<?php

namespace App\Http\Controllers\Pages\Public;

use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\RateLimiterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ResetPasswordController extends RateLimiterController
{

    /* +++++++++++++++++++ PUBLIC SECTION +++++++++++++++++++ */
    /**
     * Handle an password reset attempt.
     */
    public function resetPassword(Request $request)
    {
        // 1. Rate limiting
        $throttleKey = $this->generateThrottleKey("reset-password", "email", $request);
        $executed = $this->rateLimiter($throttleKey, "email", 3, 300);
        if ($executed) return $executed;

        // 2. Validation
        $validator = Validator::make($request->all(), [
            'email' => "required|email",
            'password' => "required|min:8|confirmed",
        ]);
        if ($validator->fails()) return $this->_inputErrorServices->getMultiErrorViewJson($validator, "email", "password");

        // 3. Reset attempt
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        // Default authentication error
        return $status === Password::PASSWORD_RESET
            ? redirect()->route("auth.login")->with("status", __($status))
            : $this->_inputErrorServices->getErrorViewJsonByString(__("login.invalid_credentials"), "email");
    }


    /* +++++++++++++++++++ INITIALIZATION +++++++++++++++++++ */
    public function __invoke(string $token)
    {
        return view("pages.public.reset-password", ["token" => $token]);
    }
}
