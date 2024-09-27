<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersTransactions;
use App\Services\ModelServices;
use YooKassa\Model\Notification\NotificationCanceled;
use YooKassa\Model\Notification\NotificationEventType;
use YooKassa\Model\Notification\NotificationSucceeded;
use YooKassa\Model\Notification\NotificationWaitingForCapture;
use App\Services\YooKassaServices;
use Exception;

class YooKassaController extends Controller
{
    private $yooKassaServices;
    private $modelServices;

    public function __construct()
    {
        $this->yooKassaServices = new YooKassaServices();
        $this->modelServices = new ModelServices();
    }

    public function callback(Request $request)
    {
        logger($request->all());
        logger("callback triggered");
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
                $this->changeTransactionStatus((object) $payment, "canceled", $request);
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
            $this->yooKassaServices->getClient()->capturePayment(["amount" => $payment->amount], $payment->id, uniqid("", true));
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
        $transaction = UsersTransactions::where("uuid", $metadata->transaction_uuid)->first();
        // exclude any repeat updates
        if ($transaction->status === "succeeded") return;

        // update data
        $this->modelServices->updateUsersTransactions("uuid", $transaction->uuid, "status", "succeeded");
        $this->modelServices->updateUserDays($transaction->user_uuid, 30);

        // change partner's amount earned if user was referred by him
        if ($transaction->referred_referral_id) {
            try {
                $this->modelServices->updatePartnerAmount($transaction->referred_referral_id, (int)$transaction->amount / 2);
            } catch (Exception $e) {
                logger("User with this referral id does not exist or either (more likely) was banned and deleted from database.");
            }
        }

        // update payment_method_id for NOT RECURRENT transactions, since recurrent transactions already have payment_method_id
        // update is_paid_10K for NOT RECURRENT transactions, since recurrent transactions are not 10K payments
        if (!$metadata->isRecurrent) {
            $this->modelServices->updateUsersTransactions("uuid", $transaction->uuid, "payment_method_id", $payment->payment_method->id);
            $this->modelServices->updateUser("uuid", $transaction->user_uuid, "is_paid_10K", 1);
        }
    }
}
