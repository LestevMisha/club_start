<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UsersTransactions;
use App\Services\TelegramServices;
use YooKassa\Model\Notification\NotificationCanceled;
use YooKassa\Model\Notification\NotificationEventType;
use YooKassa\Model\Notification\NotificationSucceeded;
use YooKassa\Model\Notification\NotificationWaitingForCapture;
use App\Services\YooKassaServices;
use Exception;

class YooKassaController extends Controller
{
    private $yooKassaServices;
    private $telegramServices;

    public function __construct()
    {
        $this->yooKassaServices = new YooKassaServices();
        $this->telegramServices = new TelegramServices();
    }

    public function callback(Request $request)
    {
        logger("callback function start");
        // get data
        logger("step 1");
        $source = file_get_contents("php://input");
        $requestBody = json_decode($source, true);
        if (!isset($requestBody["event"])) return;

        // get notification
        logger("step 2");
        $notification = $this->getNotification($requestBody);
        if (!$notification) return;

        $payment = $notification->getObject();

        logger("step 3");
        switch ($payment->status) {
            case "waiting_for_capture":
                logger("step 4 waiting_for_capture");
                $this->capturePayment($payment);
                break;
            case "canceled":
                $this->changeTransactionStatus((object) $payment, "canceled", $request);
                break;
            case "succeeded":
                logger("step 5 succeeded");
                // update transaction/insert data
                $this->changeTransactionStatus((object) $payment, "succeeded", $request, function ($payment, $transaction) {
                    logger("step 10 callback func");
                    $transaction->payment_method_id = $payment->payment_method->id;
                    logger("step 10 callback func after");

                    // check if payment was actually paid
                    if (!(bool) $payment->paid) return;

                    // find if user who paid actually exists
                    $user = User::where("uuid", $transaction->uuid)->first();
                    if (!$user) return;

                    // Add to user 30 days
                    $user->days_left += 30;
                    $user->is_paid_10K = $payment->metadata->is_paid_10K;
                    $user->save();

                    // change partner's amount earned if user was referred by him
                    if ($transaction->referral_id) {
                        logger("step 110 USER WAS REFFERED therefore amount");
                        // find who's referral id is it
                        $partner = User::where("referral_id", $transaction->referral_id)->first();
                        $partner->amount = $transaction->amount / 2;
                        $partner->save();
                    }

                    // unban if he was banned
                    try {
                        // Unban if banned
                        $this->telegramServices->unbanChatMember(
                            config("services.telegram.group_id"),
                            $user->telegram_id
                        );
                    } catch (\Telegram\Bot\Exceptions\TelegramResponseException $e) {
                        // :TODO
                    }
                });
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

    private function capturePayment($payment)
    {
        if (isset($payment->status) && $payment->status === "waiting_for_capture") {
            $this->yooKassaServices->getClient()->capturePayment([
                "amount" => $payment->amount,
            ], $payment->id, uniqid("", true));
        }
    }

    public function changeTransactionStatus($payment, $status, $request, ?callable $callback_function = null)
    {
        logger("step 6");
        $metadata = $payment->metadata;

        if (isset($metadata->transaction_id)) {
            logger("step 7");
            $transaction = UsersTransactions::find((int) $metadata->transaction_id);
            if ($transaction) {
                // check if transaction was already successfully served
                if ($transaction->status === "succeeded") return;

                $transaction->status = $status;
                // callback function
                if ($callback_function) {
                    $callback_function($payment, $transaction);
                }
                logger("step 11saving");
                $transaction->save();
            }
        }

        // handle recurrent payments
        if ($metadata->isRecurrent) {
            logger("step 8");
            // add to database
            $user = User::where("uuid", $metadata->uuid)->first();
            $transaction = UsersTransactions::where("uuid", $metadata->uuid)->first();
            $transaction->status = "succeeded";
            $transaction->save();
            $user->days_left = (int)$user->days_left + 30;
            $user->save();

            // change partner's amount earned if user was referred by him
            if ($transaction->referral_id) {
                logger("step 115 USER WAS REFFERED therefore amount");
                // find who's referral id is it
                $partner = User::where("referral_id", $transaction->referral_id)->first();
                $partner->amount = $transaction->amount / 2;
                $partner->save();
            }

            // unban if banned
            try {
                $this->telegramServices->unbanChatMember(
                    config("services.telegram.group_id"),
                    $user->telegram_id
                );
            } catch (Exception $e) {
                // :TODO
            }
        }
    }



    // // --> YooKassa Callback for different states
    // public function callback(Request $request)
    // {
    //     $source = file_get_contents("php://input");
    //     $requestBody = json_decode($source, true);
    //     Log::error($requestBody);

    //     if (isset($requestBody["event"])) {
    //         if ($requestBody["event"] === NotificationEventType::PAYMENT_SUCCEEDED) {
    //             $notification = new NotificationSucceeded($requestBody);
    //         } elseif ($requestBody["event"] === NotificationEventType::PAYMENT_WAITING_FOR_CAPTURE) {
    //             $notification = new NotificationWaitingForCapture($requestBody);
    //         } elseif ($requestBody["event"] === NotificationEventType::PAYMENT_CANCELED) {
    //             $notification = new NotificationCanceled($requestBody);
    //         } else {
    //             return;
    //         }
    //     } else {
    //         return;
    //     }
    //     $payment = $notification->getObject();

    //     // capture `waiting_for_capture` state and send notification to `succeeded` state
    //     if (isset($payment->status) && $payment->status === "waiting_for_capture") {
    //         $this->yooKassaServices->getClient()->capturePayment([
    //             "amount" => $payment->amount,
    //         ], $payment->id, uniqid("", true));
    //     }

    //     // `canceled` state
    //     if ($payment && isset($payment->status) && $payment->status === "canceled") {
    //         // delete from db
    //         $metadata = (object)$payment->metadata;
    //         if (isset($metadata->transaction_id)) {
    //             $transactionId = (int)$metadata->transaction_id;
    //             $transaction = UsersTransactions::find($transactionId);

    //             if ($transaction) {
    //                 $transaction->status = "canceled";
    //                 $transaction->save();
    //             }
    //         }
    //     }

    //     // `succeeded` state
    //     if (isset($payment->status) && $payment->status === "succeeded") {
    //         if ((bool)$payment->paid === true) {
    //             $metadata = (object)$payment->metadata;
    //             // tg instance
    //             $tg = new TelegramController();

    //             if (isset($metadata->transaction_id)) {
    //                 $transactionId = (int)$metadata->transaction_id;

    //                 // update transaction
    //                 $transaction = UsersTransactions::find($transactionId);
    //                 $transaction->status = "succeeded";
    //                 $transaction->payment_method_id = $payment->payment_method->id;
    //                 $transaction->save();
    //                 // user + 30 days
    //                 $user = User::where("uuid", $transaction->uuid)->first();
    //                 if (!$user->is_paid_10K) {
    //                     $user->days_left = (int)$user->days_left + 30;
    //                 }
    //                 // check if user made first enterance payment, if so set his is_paid_10K status to 1 (true)
    //                 if (isset($metadata->is_paid_10K)) {
    //                     $user->is_paid_10K = $metadata->is_paid_10K;
    //                 }
    //                 $user->save();
    //                 // unban if banned
    //                 $tg->unbanChatMember(config("services.telegram.group_id"), $user->telegram_id);
    //             }

    //             // handle recurrent payments
    //             if ($metadata->isRecurrent) {

    //                 // add to database
    //                 $user = User::where("uuid", $metadata->uuid)->first();
    //                 $transaction = UsersTransactions::create([
    //                     "uuid" => $user->uuid,
    //                     "yookassa_transaction_id" => $payment->id,
    //                     "status" => "succeeded",
    //                     "amount" => $payment->amount->value,
    //                     "description" => $payment->description,
    //                     "ip" => $request->ip(),
    //                 ]);
    //                 $transaction->payment_method_id = $payment->payment_method->id;
    //                 $transaction->save();
    //                 $user->days_left = (int)$user->days_left + 30;
    //                 $user->save();
    //                 // unban if banned
    //                 $tg->unbanChatMember(config("services.telegram.group_id"), $user->telegram_id);
    //             }
    //         }
    //     }
    // }

    // // --> Referral payment
    // public function referralPayment(Request $request)
    // {
    //     // make sure that link is either with referral id or not
    //     if ($request->referral_id !== null) {
    //         // make sure the user who pays is not the user with referral
    //         if ($request->user()?->referral_id === User::where("referral_id", $request->referral_id)->first()->referral_id) {
    //             return redirect()->route("error")->withErrors(["error" => "К сожалению, вы не можете использовать собственную реферальную ссылку."]);
    //         } else {
    //             Cache::put("referral_id", ["link" => (string)$request->referral_id, "isExpired" => "false"], 1200); // 20 minutes
    //         }
    //     }

    //     // make sure that user is logged in
    //     if (!Auth::check()) {
    //         return redirect()->route("register");
    //     }
    //     // make sure that user has verified telegram_id
    //     if (!Auth::user()->telegram_id) {
    //         return redirect()->route("telegram.verify");
    //     }

    //     // get referral data
    //     $referral = Cache::get("referral_id");
    //     $referral_id = $referral["link"];

    //     // make sure that user wasn"t preveously referred
    //     if (!$this->authService->isReferred()) {
    //         return redirect()->route("error")->withErrors(["error" => "Your session is gone, please try again later"]);
    //     }

    //     // check if referral data exists
    //     if (isset($referral_id)) {

    //         // check if referral id is real
    //         if (User::where("referral_id", $referral_id)->first()) {

    //             // create transaction
    //             $user = Auth::user();
    //             $modelServices = new ModelServices();

    //             // make sure that user isn't a payer already (in order to don't change his referred_status on 1)
    //             if (!UsersTransactions::where('uuid', $user->uuid)->exists()) {
    //                 $transactionUrl = $modelServices->createTransaction(
    //                     $user->uuid,
    //                     $user->email,
    //                     $user->telegram_id,
    //                     $request->ip(),
    //                     10000,
    //                     "Реферальная оплата",
    //                     $referral_id,
    //                 );
    //                 // set referral id as expired, since user created request
    //                 Cache::put("referral_id", ["link" => $referral_id, "isExpired" => "true"]);
    //                 return redirect()->away($transactionUrl);
    //             }
    //             return redirect()->route("error")->withErrors(["error" => "You had some transactions already"]);
    //         } else {
    //             return redirect()->route("error")->withErrors(["error" => "Your referral id is incorrect"]);
    //         }
    //     } else {
    //         return redirect()->route("error")->withErrors(["error" => "Your session is gone, please try again later"]);
    //     }
    // }

    // public function monthlyPayment(Request $request)
    // {
    //     // create transaction
    //     $user = Auth::user();
    //     $modelServices = new ModelServices();
    //     $transactionUrl = $modelServices->createTransaction(
    //         $user->uuid,
    //         $user->email,
    //         $user->telegram_id,
    //         $request->ip(),
    //         3000,
    //         "Месячная оплата",
    //     );

    //     return redirect()->away($transactionUrl);
    // }
}
