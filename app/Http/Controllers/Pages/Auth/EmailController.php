<?php

namespace App\Http\Controllers\Pages\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\RateLimiterController;

class EmailController extends RateLimiterController
{

    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct(
        protected \App\Services\Models\UserServices $userServices,
        protected \App\Services\Partials\_PartialServices $respond
    ) {}

    /* +++++++++++++++++++ PUBLIC SECTION +++++++++++++++++++ */
    /**
     * Handle an email verification attempt.
     */
    public function verifyEmail(Request $request)
    {
        // Step 1: Validate user_id input
        $user_id = $request->input("user_id");
        if (!$user_id) return abort(403);

        // Step 2: Validate user's eligibility
        $userServices = app(\App\Services\Models\UserServices::class);
        $user = $userServices->canVerifyEmail("user_id", $user_id);

        // Step 3. Rate limiting (1 attempt in 1 minute)
        $throttleKey = $this->generateThrottleKey("verifyEmail", "email", $request);
        $executed = $this->rateLimiter($throttleKey, "email", 1, 60);
        if ($executed) return $executed;

        // Step 4. Validate email's authenticity
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'unique:users,email'],
        ]);
        if ($validator->fails()) return $this->respond->renderValidatorErrors("partials._input-error-message", $validator);


        // Step 4. Send email verification notification
        $user->update(["email" => $request->input("email")]);
        $user->sendEmailVerificationNotification();

        return $this->respond->renderMessage(
            "partials._modal-success-message",
            __("profile.email_sent"),
        );
    }


    /* +++++++++++++++++++ INITIALIZATION +++++++++++++++++++ */
    public function __invoke(Request $request)
    {
        return view("pages.auth.email.bundled");
    }
}
