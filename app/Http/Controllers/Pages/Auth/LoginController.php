<?php

namespace App\Http\Controllers\Pages\Auth;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\RateLimiterController;

class LoginController extends RateLimiterController
{

    /* +++++++++++++++++++ PUBLIC SECTION +++++++++++++++++++ */
    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request)
    {
        // 1. Rate limiting (up to 5 attempts)
        $throttleKey = $this->generateThrottleKey("authenticate", "email", $request);
        $executed = $this->rateLimiter($throttleKey, "email", 5, 300);
        if ($executed) return $executed;

        // 2. Validation
        $remember = $request->get("remember-me", false);
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);
        if ($validator->fails()) return $this->_errorServices->getMultiErrorViewJson("partials._input-error", $validator, "email", "password");

        // 3. Login attempt
        if (Auth::attempt($validator->validated(), $remember)) {
            $request->session()->regenerate();

            // Clear any existing rate limiting blocks
            $this->clearRateLimit($throttleKey);
            return redirect()->route("private.dashboard");
        }
        // Default authentication error
        return $this->_errorServices->getMultiErrorViewJsonByString("partials._input-error", __("login.invalid_credentials"), "email", "password");
    }


    /* +++++++++++++++++++ INITIALIZATION +++++++++++++++++++ */
    public function __invoke()
    {
        return view("pages.auth.login.bundled");
    }
}
