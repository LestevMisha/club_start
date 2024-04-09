<?php

namespace App\Services;

use App\Models\UsersTransactions;
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
    // Create 10K transaction
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

    // Create 10K payment
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

    // Create 3K transaction
    public function create3KRecurrentTransaction($user)
    {
        $first_10K_transaction = $this->getFirst10KTransaction($user->uuid);

        // If payment method ID is 0, return without further processing
        if ($first_10K_transaction === null) return null;

        $amount = 3_000;
        $description = "Auto-Recurrent payment 3K";

        $transaction = $this->modelServices->createTransaction(
            $user,
            $first_10K_transaction->ip,
            $amount,
            $description,
            $first_10K_transaction->referral_id,
        );
        $transaction->payment_method_id = $first_10K_transaction->payment_method_id;
        $transaction->save();

        return $transaction;
    }

    // Create 3K payment
    public function create3KRecurrentPayment($transaction)
    {
        return  $this->getClient()->createPayment(
            array(
                'amount' => array(
                    'value' => $transaction->amount,
                    'currency' => 'RUB',
                ),
                'capture' => false,
                'payment_method_id' => $transaction->payment_method_id,
                'description' =>  $transaction->description,
                'metadata' => [
                    'uuid' => $transaction->uuid,
                    'isRecurrent' => true,
                ]
            ),
            uniqid('', true)
        );
    }

    public function getFirst10KTransaction($uuid)
    {
        // Retrieve the first transaction with the given UUID and a non-null referral ID
        $transaction = UsersTransactions::where('uuid', $uuid)
            ->whereNotNull('referral_id')
            ->first();

        // Check if a transaction was found
        if ($transaction) return $transaction;
        return null;
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
