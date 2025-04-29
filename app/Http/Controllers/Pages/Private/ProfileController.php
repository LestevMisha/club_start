<?php

namespace App\Http\Controllers\Pages\Private;

use App\Http\Controllers\RateLimiterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends RateLimiterController {

    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct(
        protected \App\Services\Models\PaymentServices $paymentServices,
        protected \App\Services\TelegramServices $telegramServices,
        protected \App\Services\Partials\_PartialServices $respond
    ) {
    }

    /* +++++++++++++++++++ PUBLIC SECTION +++++++++++++++++++ */
    /**
     * Updates the user's profile image with an image from their Telegram account.
     */
    public function updateImage(Request $request) {
        // 1. Rate limiting (up to 5 attempts)
        $throttleKey = $this->generateThrottleKey("updateImage", "image-index", $request);
        $executed = $this->rateLimiter($throttleKey, "image-index", 5, 300);
        if ($executed)
        return $executed;

        // 2. Validate index
        $index = $request->get("image-index");
        [$success, $response] = $this->telegramServices->updateImage($index);
        if (!$success)
        return $this->respond->renderErrors(
            ["image-index" => $response],
            "partials._input-error-message",
        );

        // Clear any existing rate limiting blocks
        $this->clearRateLimit($throttleKey);

        // Redirect on success
        return redirect()->route("private.profile");
    }

    /* +++++++++++++++++++ INITIALIZATION +++++++++++++++++++ */
    public function __invoke() {
        $payment = $this->paymentServices->getPayment("user_id", Auth::user()->user_id);
        return view("pages.private.profile.bundled", ["payment" => $payment]);
    }
}
