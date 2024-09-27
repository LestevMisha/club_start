<?php

use App\Services\ModelServices;
use App\Livewire\EmailVerification;
use Illuminate\Support\Facades\URL;

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authentication;
use App\Http\Controllers\TelegramController;

// redis
use App\Http\Controllers\YooKassaController;
use App\Http\Controllers\RecaptchaController;

// Public Pages
use App\Http\Controllers\Redis\RedisController;

// Auth Pages
use App\Http\Controllers\Pages\Auth\LoginController;
use App\Http\Controllers\Pages\Public\IndexController;
use App\Http\Controllers\Pages\Auth\RegisterController;

// Private Pages
use App\Http\Controllers\Redis\RedisLanguageController;
use App\Http\Controllers\Pages\Private\ProfileController;
use App\Http\Controllers\Components\ReferralLinkController;
use App\Http\Controllers\Pages\Private\DashboardController;
use App\Http\Controllers\Pages\Auth\ForgotPasswordController;
use App\Http\Controllers\Pages\Auth\TelegramVerificationController;
use App\Http\Controllers\Pages\Private\TransactionsController;

// make all redirections using https !IMPORTANT
URL::forceScheme("https");

/* +++++++++++++++++++ PAGES +++++++++++++++++++ */

Route::get('/', IndexController::class)->name('public.index');
Route::get("/forgot-password", ForgotPasswordController::class)->name("public.password.forgot");

Route::middleware(Authentication::class)->group(function () {
    Route::get('/login', LoginController::class)->name('auth.login');
    Route::get('/register', RegisterController::class)->name('auth.register');
    Route::get("/telegram/verify", TelegramVerificationController::class)->name("auth.telegram.verify");
    Route::get('/dashboard', DashboardController::class)->name('private.dashboard');
    Route::get('/profile', ProfileController::class)->name('private.profile');
    Route::get('/transactions', TransactionsController::class)->name('private.transactions');
});



/* +++++++++++++++++++ POST +++++++++++++++++++ */

Route::post("/post/recaptacha/verify", [RecaptchaController::class, "verify"])->name("post.recaptcha.verify");
Route::post("/post/login/authenticate", [LoginController::class, "authenticate"])->name("post.login.authenticate");
Route::post("/post/register/store", [RegisterController::class, "store"])->name("post.register.store");
Route::post("/post/telegram/verify/delete", [TelegramVerificationController::class, "delete"])->name("post.telegram.verify.delete");
Route::post("/post/redis/toggleState", [RedisController::class, "toggleState"])->name("post.redis.toggleState");
Route::post("/post/forgot-password/sendResetLink", [ForgotPasswordController::class, "sendResetLink"])->name("post.forgot-password.sendResetLink");
Route::post("/post/components/referral-link/saveCardCredentials", [ReferralLinkController::class, "saveCardCredentials"])->name("post.components.referral-link.saveCardCredentials");



/* +++++++++++++++++++ GET +++++++++++++++++++ */

Route::get('language/{locale}', RedisLanguageController::class);




// authenticated layout
// Route::get('/transactions', DashboardController::class)->name('transactions');
Route::get('/referral-transactions', DashboardController::class)->name('referral.transactions');
Route::get('/support', DashboardController::class)->name('support');
Route::get('/email/verify', DashboardController::class)->name('email.verify');


Route::get("/documents", function () {
    // return view('layouts.app')->nest('content', 'register');
})->name("documents");

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


// Route::get("/login", function () {
//     // return view('layouts.app')->nest('content', 'register');
// })->name("login");

// Route::get("/forgot-password", function () {
// })->name("password.forgot");

// Route::get("/error", Error::class)->name("error");
// Route::get("/support", Support::class)->name("support");
// Route::get("/documents", Documents::class)->name("documents");
// Route::get("/email/verify", EmailVerification::class)->name("email.verify");
// Route::get("/forgot-password", ForgotPassword::class)->name("password.forgot");
// Route::get("/reset-password/{token}", ResetPassword::class)->name("password.reset");

/* PRIVATE */
// Route::get("/dashboard", Dashboard::class)->name("dashboard");
// Route::get("/transactions", Transactions::class)->name("transactions");
// Route::get("/referral-transactions", ReferralTransactions::class)->name("referral.transactions");
// Route::get("/profile", Profile::class)->name("profile");


// use App\Livewire\Error;
// use App\Livewire\Index;
// use App\Livewire\Login;
// use App\Livewire\Profile;
// use App\Livewire\Support;
// use App\Livewire\Register;
// use App\Livewire\Dashboard;
// use App\Livewire\Documents;
// use App\Livewire\Transactions;
// use App\Livewire\ResetPassword;
// use App\Livewire\ForgotPassword;
// use App\Livewire\ReferralTransactions;
// use App\Livewire\TelegramVerification;