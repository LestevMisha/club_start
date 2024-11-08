<?php

namespace App\Http\Controllers\Components;

use LVR\CreditCard\CardCvc;

use Illuminate\Http\Request;

use LVR\CreditCard\CardNumber;
use App\Services\ModelServices;
use LVR\CreditCard\CardExpirationYear;
use LVR\CreditCard\CardExpirationMonth;
use Illuminate\Support\Facades\Validator;
use App\Services\Partials\_ErrorServices;
use App\Http\Controllers\RateLimiterController;

class CardCredentialsFormController extends RateLimiterController
{
    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct(
        protected ModelServices $modelServices,
        protected _ErrorServices $errorServices,
    ) {}


    /* +++++++++++++++++++ PUBLIC SECTION +++++++++++++++++++ */
    // Save Card Credentials
    public function saveCardCredentials(Request $request)
    {
        // Rate limiting
        $throttleKey = $this->generateUserThrottleKey("authenticate_card_credentials", $request);
        $executed = $this->rateLimiter($throttleKey, "card-number", 5, 300);

        if ($executed) return $executed;

        // Validation
        $data = [
            'card-name' => $request->get("card-name"),
            'card-number' => preg_replace('/\s+/', '', $request->get("card-number")),
            'expiration-year' => preg_replace('/\s+/', '', $request->get("expiration-year")),
            'expiration-month' => preg_replace('/\s+/', '', $request->get("expiration-month")),
            'cvc' => preg_replace('/\s+/', '', $request->get("cvc")),
        ];

        $validator = Validator::make($data, [
            'card-name' => ['required', "min:2"],
            'card-number' => ['required', 'unique:card_credentials,card_number', "min:16", "max:16", new CardNumber],
            'expiration-year' => ['required', new CardExpirationYear($data["expiration-month"])],
            'expiration-month' => ['required', new CardExpirationMonth($data["expiration-year"])],
            'cvc' => ['required', new CardCvc($data["card-number"])],
        ]);

        // Error handling
        if ($validator->fails()) return $this->errorServices->getMultiErrorViewJson("partials._input-error", $validator, "card-name", "card-number", "expiration-year", "expiration-month", "cvc");

        // Register credit card on a user
        $this->modelServices->createCardCredentials(
            $data['card-name'],
            $data['card-number'],
            $data['cvc'],
            $data['expiration-year'],
            $data['expiration-month']
        );

        return redirect()->route("private.dashboard");
    }
}
