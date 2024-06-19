<?php

namespace App\Services;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;


class GlobalServices
{
    public $yooKassaServices, $modelServices, $telegramServices;

    public function __construct()
    {
        $this->yooKassaServices = app(YooKassaServices::class);
        $this->telegramServices = app(TelegramServices::class);
        $this->modelServices = app(ModelServices::class);
    }

    // Check if user is eligible to be on the private pages
    public function checkPrivatePagesAccess(Request $request)
    {
        if (!$this->isDatabaseConnected()) return redirect()->route("error")->with(["error" => "К сожалению, на сайте наблюдаются неполадки c базой данных, пожалуйста попробуйте позже."]);
        if (!$this->isUserAuthenticated()) return redirect()->route("register");
        if (!$this->isTelegramVerified()) return redirect()->route("telegram.verify");
        if (!$this->hasPaidSubscription()) return $this->fullPaymentProcessing($request);
        // check if user didn't observe image yet
        if (!$this->modelServices->hasImage()) return $this->telegramServices->observeSaveUserImage(auth()->user()->telegram_id, auth()->user()->uuid);
    }

    // Check if user is eligible to be on the telegram-verify.php
    public function checkTelegramVerifyPageAccess(Request $request)
    {
        if (!$this->isDatabaseConnected()) return redirect()->route("error")->with(["error" => "К сожалению, на сайте наблюдаются неполадки c базой данных, пожалуйста попробуйте позже."]);
        if (!$this->isUserAuthenticated()) return redirect()->route("register");
        if (!$this->isTelegramVerified()) return;
        if (!$this->hasPaidSubscription()) return $this->fullPaymentProcessing($request);
        return redirect()->route("dashboard");
    }

    // Check if user is eligible to be on the telegram-verify page
    public function checkLoginRegisterPagesAccess(Request $request)
    {
        if (!$this->isDatabaseConnected()) return redirect()->route("error")->with(["error" => "К сожалению, на сайте наблюдаются неполадки c базой данных, пожалуйста попробуйте позже."]);
        if (!$this->isUserAuthenticated()) return;
        if (!$this->isTelegramVerified()) return redirect()->route("telegram.verify");
        if (!$this->hasPaidSubscription()) return $this->fullPaymentProcessing($request);
        return redirect()->route("dashboard");
    }

    // separated block (offloading)
    public function fullPaymentProcessing(Request $request)
    {
        // if payment is pending
        if ($request->cookie("payment_status") === "pending") return redirect()->to($request->cookie("payment_link"));

        $transaction = $this->yooKassaServices->create10KTransaction($request, auth()->user());
        if (!$transaction) return redirect()->route("error");

        $payment = $this->yooKassaServices->create10KPayment($transaction);
        if (!$payment) return redirect()->route("error");

        $payment_link = $this->yooKassaServices->processSuccessfulPayment($transaction, $payment);
        // Set cookies
        Cookie::queue("payment_link", $payment_link, 10);
        Cookie::queue("payment_status", $payment->status, 10);

        return redirect($payment_link);
    }

    // check if user completed a full registration
    public function isFullyRegistered()
    {
        return !(!$this->isUserAuthenticated() || !$this->isTelegramVerified() || !$this->hasPaidSubscription());
    }

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
        return auth()->user()->is_paid_10K === 1;
    }

    // error handler in case server crush / any other mistake (with specified $key)
    public function handleError(callable $func, $this_, $key = "server")
    {
        try {
            $func();
        } catch (Exception $e) {
            $error = $e->getMessage();
            if (strpos($error, 'SQL') !== false) {
                $this_->addError($key, "Пожалуйста проверьте интернет соединение. Попробуйте позже. Если ничего не помогло напишите нам в <a href='/support'>поддержку</a>." . " Ошибка сервера: " . $error);
            } else {
                $this_->addError($key, $error);
            }
        }
    }
}
