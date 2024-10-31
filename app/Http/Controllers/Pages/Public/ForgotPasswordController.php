<?php

namespace App\Http\Controllers\Pages\Public;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use App\Services\Partials\_InputErrorServices;
use App\Http\Controllers\RateLimiterController;

class ForgotPasswordController extends RateLimiterController
{
    
    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct(
        protected _InputErrorServices $_inputErrorServices
    ) {}


    /* +++++++++++++++++++ PUBLIC SECTION +++++++++++++++++++ */
    /**
     * Handle an password reset link notification attempt.
     */
    public function sendResetLink(Request $request)
    {
        // 1. Rate limiting
        $throttleKey = $this->generateThrottleKey("forgot-password", "email", $request);
        $executed = $this->rateLimiter($throttleKey, "email", 3, 300);
        if ($executed) return $executed;

        // 2. Validation
        $validator = Validator::make($request->all(), [
            'email' => "required|email",
        ]);
        if ($validator->fails()) return $this->_inputErrorServices->getSingleErrorViewJson($validator, "email");

        // 3. Send link attempt
        $email = request()->get("email");
        $status = Password::sendResetLink(compact('email'));
        return $status === Password::RESET_LINK_SENT
            ? response()->json(["message" => __("forgot-password.reset_link_is_sent")])
            : response()->json(["message" => __("forgot-password.reset_failed")]);
    }


    /* +++++++++++++++++++ INITIALIZATION +++++++++++++++++++ */
    public function __invoke()
    {
        return view("pages.public.forgot-password");
    }
}
