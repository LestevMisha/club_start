<?php

use App\Http\Controllers\Components\Checkbox;
use Illuminate\Support\Facades\URL;

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authentication;
use App\Http\Controllers\TelegramController as TelegramController_;

// redis
use App\Http\Controllers\RecaptchaController;

// Public Pages
use App\Http\Controllers\Redis\RedisController;

// Auth Pages
use App\Http\Controllers\Pages\Auth\LoginController;
use App\Http\Controllers\Pages\Auth\GoogleController;
use App\Http\Controllers\Pages\Public\IndexController;

// Private Pages
use App\Http\Controllers\Pages\Public\TermsController;
use App\Http\Controllers\Pages\Auth\RegisterController;
use App\Http\Controllers\Pages\Auth\TelegramController;
use App\Http\Controllers\Redis\RedisLanguageController;
use App\Http\Controllers\Pages\Public\PrivacyController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\Pages\Private\ProfileController;
use App\Http\Controllers\Components\LogoutButtonController;
use App\Http\Controllers\Pages\Private\DashboardController;
use App\Http\Controllers\Pages\Public\PublicOfferController;
use App\Http\Controllers\Pages\Intermediate\PaymentController;
use App\Http\Controllers\Pages\Private\TransactionsController;
use App\Http\Controllers\Pages\Public\ResetPasswordController;
use App\Http\Controllers\Pages\Public\ForgotPasswordController;
use App\Http\Controllers\Pages\Intermediate\AutoLoginController;
use App\Http\Controllers\Pages\Auth\TelegramVerificationController;
use App\Http\Controllers\Pages\Private\ReferralTransactionsController;

URL::forceScheme("https");

/* +++++++++++++++++++ GET-PAGES +++++++++++++++++++ */
Route::get('/', IndexController::class)->name('public.index');
Route::get("/forgot-password", ForgotPasswordController::class)->name("public.password.forgot");
Route::get("/reset-password/{token}", ResetPasswordController::class)->name("password.reset");
Route::get('/terms', TermsController::class)->name('public.terms');
Route::get('/privacy', PrivacyController::class)->name('public.privacy');
Route::get('/public-offer', PublicOfferController::class)->name('public.public-offer');
Route::get('/auto-login', AutoLoginController::class)->name('public.auto-login');

// Google Login/Register callback
Route::get('login/google/callback', [GoogleController::class, 'handleGoogleCallback']);
// Telegram Login/Register callback
Route::get('login/telegram/callback', [TelegramController::class, 'handleTelegramCallback']);


Route::middleware(Authentication::class)->group(function () {
    Route::get('/login', LoginController::class)->name('auth.login');
    Route::get('/register', RegisterController::class)->name('auth.register');

    // Google Login/Register
    Route::get('login/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.login.google');
    // Telegram Login/Register
    Route::get('login/telegram', [TelegramController::class, 'redirectToTelegram'])->name('auth.login.telegram');

    Route::get("/telegram/verify", TelegramVerificationController::class)->name("intermediate.telegram.verify");
    Route::get("/payment", PaymentController::class)->name("intermediate.payment");
    Route::get('/dashboard', DashboardController::class)->name('private.dashboard');
    Route::get('/profile', ProfileController::class)->name('private.profile');
    Route::get('/transactions', TransactionsController::class)->name('private.transactions');
    Route::get('/referral-transactions', ReferralTransactionsController::class)->name('private.referral.transactions');
});

/* +++++++++++++++++++ POST-JAVASCRIPT +++++++++++++++++++ */
Route::post("/post/recaptacha/verify", [RecaptchaController::class, "verify"])->name("post.recaptcha.verify");
Route::post("/post/redis/toggleState", [RedisController::class, "toggleState"])->name("post.redis.toggleState");
Route::post("/post/login/authenticate", [LoginController::class, "authenticate"])->name("post.login.authenticate");
Route::post("/post/register/store", [RegisterController::class, "store"])->name("post.register.store");
Route::post("/post/telegram/verify/deleteUser", [TelegramVerificationController::class, "deleteUser"])->name("post.telegram.verify.deleteUser");
Route::post("/post/telegram/verify/pay", [PaymentController::class, "pay"])->name("post.telegram.verify.pay");
Route::post("/post/forgot-password/sendResetLink", [ForgotPasswordController::class, "sendResetLink"])->name("post.forgot-password.sendResetLink");
Route::post("/post/reset-password/resetPassword", [ResetPasswordController::class, "resetPassword"])->name("post.reset-password.resetPassword");
Route::post("/post/profile/updateImage", [ProfileController::class, "updateImage"])->name("post.profile.updateImage");
Route::post("/post/profile/verifyEmail", [ProfileController::class, "verifyEmail"])->name("post.profile.verifyEmail");
Route::post("/post/components/side-menu/logout", [LogoutButtonController::class, "logout"])->name("post.components.side-menu.logout");
Route::post("/post/components/checkbox/setRememberMe", [Checkbox::class, "setRememberMe"])->name("post.components.checkbox.setRememberMe");

/* +++++++++++++++++++ POST-API-CALLBACKS +++++++++++++++++++ */
Route::post("/payment/processing", [PaymentController::class, "callback"]);

/* +++++++++++++++++++ LOCALE-SWITCHER +++++++++++++++++++ */
Route::get('language/{locale}', RedisLanguageController::class);

/* +++++++++++++++++++ EMAIL-VERIFICATION +++++++++++++++++++ */
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route("private.dashboard");
})->middleware(['auth', 'signed'])->name('verification.verify');

/* +++++++++++++++++++ TELEGRAM-VERIFICATION +++++++++++++++++++ */
Route::controller(TelegramController_::class)->group(function () {
    Route::get("/setwebhook", "setWebhook");
    Route::get("/removewebhook", "removeWebhook");
    Route::post("/1MIIJRAIBADANBgkqhkiG9w0BAQEFAASCCS4wggkqAgEAAoICAQC0dr14WFaDsDJsGvjxdCA8sD9GHD3/webhook", "handle");
});
