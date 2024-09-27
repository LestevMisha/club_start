<?php

namespace App\Http\Controllers\Components;

use Illuminate\Http\Request;

use App\Services\ModelServices;

use Illuminate\Support\Facades\Validator;
use App\Services\Partials\_InputErrorServices;
use App\Http\Controllers\RateLimiterController;


class ReferralLinkController extends RateLimiterController
{
    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct(
        protected ModelServices $modelServices,
        protected _InputErrorServices $_inputErrorServices,
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
        $validator = Validator::make($request->all(), [
            'card-number' => ['required', 'unique:card_credentials,card_number', "min:16", "max:16"],
        ]);

        // Error handling
        if ($validator->fails()) return $this->_inputErrorServices->getSingleErrorViewJson($validator, "card-number");

        // Register credit card on a user
        $this->modelServices->createCardCredentials($request->get('card-number'));

        return response()->json(['reload' => true]);
    }
}
