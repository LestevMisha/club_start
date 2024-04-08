<?php

namespace App\Services;

use Illuminate\Http\Request;
use YooKassa\Client;
use Illuminate\Support\Facades\Auth;

class YooKassaServices
{
    protected $modelServices;

    public function __construct()
    {
        $this->modelServices = app(ModelServices::class);
    }

    // Create YooKassa Payment
    private function createPayment(float $amount, string $description, array $options = [])
    {
        $client = $this->getClient();
        $payment = $client->createPayment([
            "amount" => [
                "value" => $amount,
                "currency" => "RUB",
            ],
            "capture" => false,
            "confirmation" => [
                "type" => "redirect",
                "return_url" => route("dashboard"),
            ],
            "metadata" => $options,
            "description" => $description,
            "save_payment_method" => true,
        ], uniqid("", true));

        return $payment;
    }


    /* ++++++++ PUBLIC METHODS ++++++++ */
    // Create transaction
    public function create10KTransaction(Request $request)
    {
        $amount = 10_000;
        $description = "Registration 10K";

        return $this->modelServices->createTransaction(
            Auth::user(),
            $request->ip(),
            $amount,
            $description,
            $request->cookie("referral_id", ""),
        );
    }


    // Create payment
    public function create10KPayment($transaction)
    {
        return $this->createPayment(
            $transaction->amount,
            $transaction->description,
            [
                "is_paid_10K" => 1,
                "transaction_id" => $transaction->id,
            ]
        );
    }


    // Process successful payment
    public function processSuccessfulPayment($transaction, $payment)
    {
        $transaction->yookassa_transaction_id = $payment->id;
        $transaction->status = $payment->status;
        $transaction->save();

        return $payment->getConfirmation()->getConfirmationUrl();
    }

    // Get YooKassa Client Object
    public function getClient(): Client
    {
        $client = new Client();
        $client->setAuth(config("services.yookassa.shop_id"), config("services.yookassa.secret_key"));
        return $client;
    }
}
