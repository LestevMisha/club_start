<?php

namespace App\Services;

use App\Models\UsersTransactions;
use Illuminate\Http\Request;
use YooKassa\Client;
use Illuminate\Support\Facades\Auth;

class YooKassaServices
{



    /* +++++++++++++++++ HEADER +++++++++++++++++ */
    protected $modelServices;

    public function __construct()
    {
        $this->modelServices = app(ModelServices::class);
    }



    /* +++++++++++++++++ PRIVATE METHODS +++++++++++++++++ */
    // Create YooKassa Payment
    private function createPayment(float $amount, string $description, array $options = [], $isRecurrent = false, string $payment_method_id = null)
    {
        $client = $this->getClient();
        $paymentData = [
            "amount" => [
                "value" => $amount,
                "currency" => "RUB",
            ],
            "capture" => true,
            "description" => $description,
            "metadata" => $options,
        ];

        if (!$isRecurrent) {
            $paymentData["confirmation"] = [
                "type" => "redirect",
                "return_url" => route("dashboard"),
            ];
            $paymentData["save_payment_method"] = true;
        } else {
            $paymentData["payment_method_id"] = $payment_method_id;
        }
        logger($paymentData);
        return $client->createPayment($paymentData, uniqid("", true));
    }


    /* ++++++++ PUBLIC METHODS ++++++++ */
    // Create 10K transaction
    public function create10KTransaction(Request $request, $user)
    {
        return $this->modelServices->createTransaction(
            $user,
            $request->ip(),
            10000,
            "Регистрация оплата 10 000 руб.",
            $request->cookie("referral_id", ""),
        );
    }

    // Create 3K transaction
    public function create3KRecurrentTransaction($user)
    {
        $firstUserTransaction = $this->modelServices->getFirstUserTransaction("user_uuid", $user->uuid);
        return $this->modelServices->createTransaction(
            $user,
            $firstUserTransaction->ip,
            3000,
            "Автоповторный платеж 3 000 руб.",
            $firstUserTransaction->referral_id,
            $firstUserTransaction->payment_method_id
        );
    }

    // Create 10K payment
    public function create10KPayment($transaction)
    {
        return $this->createPayment(
            $transaction->amount,
            $transaction->description,
            ["transaction_uuid" => $transaction->uuid],
            false,
            null,
        );
    }

    // Create 3K recurrent payment
    public function create3KRecurrentPayment($transaction)
    {
        return $this->createPayment(
            $transaction->amount,
            $transaction->description,
            ['transaction_uuid' => $transaction->uuid, 'isRecurrent' => true],
            true,
            $transaction->payment_method_id
        );
    }

    // Process successful payment
    public function processSuccessfulPayment($transaction, $payment)
    {
        $this->modelServices->updateUsersTransactions("uuid", $transaction->uuid, "yookassa_transaction_id", $payment->id);
        $this->modelServices->updateUsersTransactions("uuid", $transaction->uuid, "status", $payment->status);
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
