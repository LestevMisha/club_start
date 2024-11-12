<?php

namespace App\Http\Controllers\Pages\Public;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\RateLimiterController;
use App\Services\Partials\_PartialServices;

class ForgotPasswordController extends RateLimiterController
{

    /* +++++++++++++++++++ PUBLIC SECTION +++++++++++++++++++ */
    /**
     * Handle an password reset link notification attempt.
     */
    public function sendResetLink(Request $request)
    {
        // 1. Rate limiting
        $throttleKey = $this->generateThrottleKey("sendResetLink", "email", $request);
        $executed = $this->rateLimiter($throttleKey, "email", 5, 300);
        if ($executed) return $executed;

        // 2. Validation
        $validator = Validator::make($request->all(), ['email' => "required|email"]);
        if ($validator->fails()) {
            return $this->respond->renderValidatorErrors(
                "partials._input-error-message",
                $validator,
            );
        }

        // 3. Send link attempt
        $email = request()->get("email");
        $status = Password::sendResetLink(compact('email'));

        if ($status === Password::RESET_LINK_SENT) {

            // Clear any existing rate limiting blocks
            $this->clearRateLimit($throttleKey);

            return $this->respond->renderMessage(
                "partials._modal-success-message",
                __("forgot-password.reset_link_is_sent"),
            );
        } else {
            return $this->respond->renderMessage(
                "partials._modal-error-message",
                __("forgot-password.reset_failed"),
            );
        }
    }


    /* +++++++++++++++++++ INITIALIZATION +++++++++++++++++++ */
    public function __invoke()
    {
        return view("pages.public.forgot-password.bundled");
    }
}
