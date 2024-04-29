<?php

use App\Http\Controllers\TelegramController;
use App\Livewire\Error;
use App\Livewire\MainIndex;
use App\Livewire\Login;
use App\Livewire\Support;
use App\Livewire\Register;
use App\Livewire\Dashboard;
use App\Livewire\Documents;
use App\Services\ModelServices;
use App\Livewire\ResetPassword;
use App\Livewire\ForgotPassword;
use App\Livewire\EmailVerification;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use App\Livewire\TelegramVerification;
use App\Http\Controllers\YooKassaController;
use App\Livewire\Profile;
use App\Livewire\ReferralTransactions;
use App\Livewire\Transactions;

// make all redirections using https !IMPORTANT
URL::forceScheme("https");


// Pages

/* PRIVATE */
Route::get("/dashboard", Dashboard::class)->name("dashboard");
Route::get("/transactions", Transactions::class)->name("transactions");
Route::get("/referral-transactions", ReferralTransactions::class)->name("referral.transactions");
Route::get("/profile", Profile::class)->name("profile");
Route::get("/telegram/verify", TelegramVerification::class)->name("telegram.verify");

/* PUBLIC */
Route::get('/', MainIndex::class)->name("main");
Route::get("/login", Login::class)->name("login");
Route::get("/register", Register::class)->name("register");
Route::get("/error", Error::class)->name("error");
Route::get("/support", Support::class)->name("support");
Route::get("/documents", Documents::class)->name("documents");
Route::get("/email/verify", EmailVerification::class)->name("email.verify");
Route::get('/forgot-password', ForgotPassword::class)->name('password.forgot');
Route::get('/reset-password/{token}', ResetPassword::class)->name('password.reset');


// methods
Route::post("/logout", [ModelServices::class, "logout"])->name("logout");
Route::post("/logout/admin", [ModelServices::class, "logout_admin"])->name("logout.admin");

// Telegram Verification
Route::controller(TelegramController::class)->group(function () {
    Route::get("/setwebhook", "setWebhook");
    Route::get("/removewebhook", "removeWebhook");
    Route::post("/1MIIJRAIBADANBgkqhkiG9w0BAQEFAASCCS4wggkqAgEAAoICAQC0dr14WFaDsDJsGvjxdCA8sD9GHD3/webhook", "handle");
});

// E-mail Verification
Route::controller(EmailVerification::class)->group(function () {
    Route::get("/email/verify/{id}/{hash}", "verify")->name("verification.verify");
    Route::post("/email/resend", "resend")->name("verification.resend");
});

// Payment Routes
Route::controller(YooKassaController::class)->group(function () {
    Route::post("/yoocallback", "callback");
    Route::post("/payment/monthly", "monthlyPayment")->name("payment.monthly");
    Route::get("/payment/referral", "referralPayment")->name("payment.referral");
});