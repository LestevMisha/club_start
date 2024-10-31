<?php

namespace App\Services;

use YooKassa\Client;
use Illuminate\Support\Str;
use App\Models\UsersTransactions;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use YooKassa\Request\Payments\CreatePaymentResponse;

class UsersTransactionsServices
{
    // Create a new transaction
    public function createTransaction($transaction_status, $transaction_amount, $transaction_description, $transaction_referred_by_id, $transaction_recurring_payment_flag, $user_uuid, $user_ip_address, $yookassa_transaction_id, $yookassa_payment_method_id): UsersTransactions
    {
        return UsersTransactions::create([
            "transaction_uuid" => Str::orderedUuid()->toString(),
            "transaction_status" => $transaction_status,
            "transaction_amount" => $transaction_amount,
            "transaction_description" => $transaction_description,
            "transaction_referred_by_id" => $transaction_referred_by_id, // optional
            "transaction_recurring_payment_flag" => $transaction_recurring_payment_flag,
            "user_uuid" => $user_uuid,
            "user_ip_address" => $user_ip_address,
            "yookassa_transaction_id" => $yookassa_transaction_id,
            "yookassa_payment_method_id" => $yookassa_payment_method_id // optional
        ]);
    }

    // Update user transaction row
    public function updateUserTransaction($whereKey, $whereValue, $row, $value): void
    {
        $userModel = UsersTransactions::where($whereKey, $whereValue)->first();
        if ($userModel && $userModel->offsetExists($row)) {
            $userModel->{$row} = $value;
            $userModel->save();
        }
    }

    // Create transaction and payemnt at once. Returns payment link
    public function createUserTransactionWithPayment($transaction_amount, $transaction_description, $transaction_referred_by_id, $transaction_recurring_payment_flag, $user_uuid, $user_ip_address, $yookassa_transaction_id, $yookassa_payment_method_id): string
    {
        // Set a cache key for the specific user and transaction
        $cacheKey = "transaction_{$user_uuid}_debounce";
        if (Cache::has($cacheKey)) return Cache::get($cacheKey);

        $transaction = $this->createTransaction("created", $transaction_amount, $transaction_description, $transaction_referred_by_id, $transaction_recurring_payment_flag, $user_uuid, $user_ip_address, $yookassa_transaction_id, $yookassa_payment_method_id);
        $payment = $this->createPayment($transaction_amount, $transaction_description, ["transaction_uuid" => $transaction->transaction_uuid]);
        $this->updateUserTransaction("transaction_uuid", $transaction->transaction_uuid, "yookassa_transaction_id", $payment->id);
        $this->updateUserTransaction("transaction_uuid", $transaction->transaction_uuid, "transaction_status", $payment->status);

        // Set cache to debounce multiple transaction creations
        $transaction_payment_link = $payment->getConfirmation()->getConfirmationUrl();
        Cache::put($cacheKey, $transaction_payment_link, now()->addMinutes(10));

        return $transaction_payment_link;
    }

    // Create a new payment
    private function createPayment(float $amount, string $description, array $options = [], $isRecurrent = false, string $payment_method_id = null): CreatePaymentResponse
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
                "return_url" => route("private.dashboard"),
            ];
            $paymentData["save_payment_method"] = true;
        } else {
            $paymentData["payment_method_id"] = $payment_method_id;
        }
        logger($paymentData ?? "");
        return $client->createPayment($paymentData, uniqid("", true));
    }

    // Returns Yookassa's Client object
    public function getClient(): Client
    {
        $client = new Client();
        $client->setAuth(config("services.yookassa.shop_id"), config("services.yookassa.secret_key"));
        return $client;
    }

    // Get transaction
    public function getTransaction($transaction_uuid): UsersTransactions|null
    {
        return UsersTransactions::where("transaction_uuid", $transaction_uuid)->first();
    }

    // Check if subscription is paid 
    public function checkIfSubscriptionIsPaid($user): bool
    {
        // If the user is exempted from the Telegram channel requirement, return true
        if ($user->telegram_channel_exempted === 1) {
            return true;
        }
    
        // Get the most recent successful transaction for the user
        $lastSuccessfulTransaction = UsersTransactions::where('user_uuid', $user->uuid)
            ->where('transaction_status', 'succeeded')
            ->orderBy('created_at', 'desc')
            ->first();
    
        // Check if there is a successful transaction within the last month
        return $lastSuccessfulTransaction && $lastSuccessfulTransaction->created_at >= now()->subMonth();
    }
    
}
