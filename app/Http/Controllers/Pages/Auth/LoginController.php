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
        // Rate limiting
        $throttleKey = $this->generateThrottleKey("authenticate", "email", $request);
        $executed = $this->rateLimiter($throttleKey, "email", 5, 300);

        if ($executed) return $executed;

        // Validation
        $remember = $request->get("remember-me", false);
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        // Error handling
        if ($validator->fails()) return $this->_inputErrorServices->getMultiErrorViewJson($validator, "email", "password");

        // Login attempt
        if (Auth::attempt($validator->validated(), $remember)) {
            $request->session()->regenerate();
            return response()->json(['reload' => true]);
        }
        // Default authentication error
        return $this->_inputErrorServices->getErrorViewJsonByString(__("login.records_not_matched"), "email");
    }


    /* +++++++++++++++++++ INITIALIZATION +++++++++++++++++++ */
    public function __invoke()
    {
        return view("pages.auth.login");
    }
}
