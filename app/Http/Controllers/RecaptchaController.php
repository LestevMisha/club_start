<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\Partials\_InputErrorServices;

class RecaptchaController extends Controller
{
    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct(
        protected _InputErrorServices $_inputErrorServices
    ) {}

    public function verify(Request $request)
    {
        $token = $request->get("token");

        // Define the score thresholds
        $lowScoreThreshold = 0.3;
        $mediumScoreThreshold = 0.6;

        // Send the request to the Google reCAPTCHA API
        $response = Http::get('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('services.google.recaptcha.secret_key'),
            'response' => $token
        ])->json();

        // Check if the API response indicates a successful verification
        if (!isset($response['success']) || !$response['success']) {
            return $this->_inputErrorServices->getErrorViewJsonByString(
                __("recaptcha.request_failed"),
                'endpoint'
            );
        }

        // Retrieve the reCAPTCHA score from the response
        $captchaScore = $response['score'] ?? 0;

        // Handle different score scenarios
        if ($captchaScore <= $lowScoreThreshold) {
            return $this->_inputErrorServices->getErrorViewJsonByString(
                __("recaptcha.bot_detected"),
                'endpoint'
            );
        } elseif ($captchaScore <= $mediumScoreThreshold) {
            return $this->_inputErrorServices->getErrorViewJsonByString(
                __("recaptcha.inconclusive_result"),
                'endpoint'
            );
        }

        // If the score is above the medium threshold, verification is successful
        return response()->json(["success" => true]);
    }
}