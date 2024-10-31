<?php

namespace App\Services;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;


class GlobalServices
{

    public function __construct(
        // protected YooKassaServices $yooKassaServices,
        protected TelegramServices $telegramServices,
        protected ModelServices $modelServices,
    ) {}

    // // separated block (offloading)
    // public function fullPaymentProcessing(Request $request)
    // {
    //     // if payment is pending
    //     if ($request->cookie("payment_status") === "pending") return redirect()->to($request->cookie("payment_link"));

    //     $transaction = $this->yooKassaServices->createUserTransaction($request, auth()->user(), 6000, "Регистрация оплата 6 000 руб.");
    //     if (!$transaction) return redirect()->route(route: "error");

    //     $payment = $this->yooKassaServices->create10KPayment($transaction);
    //     if (!$payment) return redirect()->route("error");

    //     $payment_link = $this->yooKassaServices->processSuccessfulPayment($transaction, $payment);
    //     // Set cookies
    //     Cookie::queue("payment_link", $payment_link, 10);
    //     Cookie::queue("payment_status", $payment->status, 10);

    //     return redirect($payment_link);
    // }

    // if user is registered
    public function isUserAuthenticated()
    {
        return Auth::check();
    }

    // if database is connected
    public function isDatabaseConnected()
    {
        try {
            DB::connection()->getPDO();
            DB::connection()->getDatabaseName();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    // if user verified telegram account
    public function isTelegramVerified()
    {
        return auth()->user()->telegram_id !== null;
    }

    // if user paid subscription
    public function hasPaidSubscription()
    {
        // if user is telegram_channel_exempted give him a pass
        if (auth()->user()->telegram_channel_exempted === 1) {
            return true;
        }
        return auth()->user()->has_paid === 1;
    }
}
