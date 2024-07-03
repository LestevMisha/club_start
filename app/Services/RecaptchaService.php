<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class RecaptchaService
{
    private $lowScoreThreshold = 0.3;
    private $mediumScoreThreshold = 0.6;

    public function verify(string $token): bool
    {
        // Send the request to the Google reCAPTCHA API
        $response = Http::get('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('services.google.recaptcha.secret_key'),
            'response' => $token
        ])->json();

        // Check if the API response indicates a successful verification
        if (!isset($response['success']) || !$response['success']) {
            return false;
        }

        // Retrieve the reCAPTCHA score from the response
        $captchaScore = $response['score'] ?? 0;

        // Handle different score scenarios
        if ($captchaScore <= $this->lowScoreThreshold) {
            return 'bot_detected';
        } elseif ($captchaScore <= $this->mediumScoreThreshold) {
            return 'captcha_failed';
        }

        // If the score is above the medium threshold, verification is successful
        return true;
    }
}
