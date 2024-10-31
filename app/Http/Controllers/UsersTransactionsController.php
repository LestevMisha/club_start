<?php

namespace App\Http\Controllers;

use App\Services\UsersTransactionsServices;
use App\Services\ModelServices;
use YooKassa\Model\Notification\NotificationCanceled;
use YooKassa\Model\Notification\NotificationEventType;
use YooKassa\Model\Notification\NotificationSucceeded;
use YooKassa\Model\Notification\NotificationWaitingForCapture;

class UsersTransactionsController extends Controller
{
    public function __construct(
        protected UsersTransactionsServices $usersTransactionsServices,
        protected ModelServices $modelServices
    ) {}

    public function callback()
    {
        // observe data
        $source = file_get_contents("php://input");
        $requestBody = json_decode($source, true);
        if (!isset($requestBody["event"])) return;

        // get notification
        $notification = $this->getNotification($requestBody);
        if (!$notification) return;

        $payment = $notification->getObject();

        switch ($payment->status) {
            case "waiting_for_capture":
                $this->capturePayment($payment);
                break;
            case "canceled":
                $this->changeTransactionStatus((object) $payment, "canceled");
                break;
            case "succeeded":
                $this->handleSucceeded($payment);
                break;
            default:
                return;
        }
    }

    private function getNotification($requestBody)
    {
        switch ($requestBody["event"]) {
            case NotificationEventType::PAYMENT_SUCCEEDED:
                return new NotificationSucceeded($requestBody);
            case NotificationEventType::PAYMENT_WAITING_FOR_CAPTURE:
                return new NotificationWaitingForCapture($requestBody);
            case NotificationEventType::PAYMENT_CANCELED:
                return new NotificationCanceled($requestBody);
            default:
                return null;
        }
    }

    // Step waiting_for_capture (1)
    private function capturePayment($payment)
    {
        if (isset($payment->status) && $payment->status === "waiting_for_capture") {
            $this->usersTransactionsServices->getClient()->capturePayment(["amount" => $payment->amount], $payment->id, uniqid("", true));
        }
    }

    private function changeTransactionStatus($payment, string $status): void
    {
        // Validate and retrieve transaction UUID from payment metadata
        $transactionUuid = $payment->metadata->transaction_uuid ?? null;
        if (!$transactionUuid) return;

        // Fetch the transaction
        $transaction = $this->usersTransactionsServices->getTransaction($transactionUuid);
        if ($transaction) {
            $this->usersTransactionsServices->updateUserTransaction('transaction_uuid', $transaction->transaction_uuid, 'transaction_status', $status);
        }
    }


    // Step succeeded (3, last)
    private function handleSucceeded($payment)
    {
        // process only succeeded payments
        if (!(isset($payment->status) && $payment->status === "succeeded")) return;
        // process only paid payments
        if (!(bool) $payment->paid) return;

        $metadata = $payment->metadata;
        // get transaction processed
        $transaction = $this->usersTransactionsServices->getTransaction($metadata->transaction_uuid);
        // exclude any repeated updates
        if ($transaction->transaction_status === "succeeded") return;

        // update data
        $this->usersTransactionsServices->updateUserTransaction("transaction_uuid", $transaction->transaction_uuid, "transaction_status", "succeeded");
        $this->modelServices->updateUserDays($transaction->user_uuid, 30);

        // change partner's amount earned if user was referred by him
        if ($transaction->transaction_referred_by_id) {
            $this->modelServices->updatePartnerAmount($transaction->transaction_referred_by_id, (int)$transaction->transaction_amount / 2);
        }

        // update payment_method_id for NOT RECURRENT transactions, since recurrent transactions already have payment_method_id
        if (!$metadata->isRecurrent) {
            $this->usersTransactionsServices->updateUserTransaction("transaction_uuid", $transaction->transaction_uuid, "yookassa_payment_method_id", $payment->payment_method->id);
        }
    }
}
