<?php

namespace App\Http\Controllers\Pages\Public;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\RateLimiterController;

class ForgotPasswordController extends RateLimiterController
{

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
        if ($validator->fails()) return $this->_errorServices->getSingleErrorViewJson("partials._input-error", $validator, "email");

        // 3. Send link attempt
        $email = request()->get("email");
        $status = Password::sendResetLink(compact('email'));

        if ($status === Password::RESET_LINK_SENT) {
            // Clear any existing rate limiting blocks
            $this->clearRateLimit($throttleKey);

            // restrict from multiple reset links being sent
            $this->rateGeometricLimiter("reset-link-sent", "email");

            return $this->_partialServices->getViewJsonByString(
                "partials._success-message",
                ["dataMessage" => __("forgot-password.reset_link_is_sent")],
                "data",
                'message'
            );
        } else {
            return $this->_errorServices->getErrorViewJsonByString(
                "partials._error-message",
                __("forgot-password.reset_failed"),
                'error'
            );
        }
    }


    /* +++++++++++++++++++ INITIALIZATION +++++++++++++++++++ */
    public function __invoke()
    {
        return view("pages.public.forgot-password.bundled");
    }
}
