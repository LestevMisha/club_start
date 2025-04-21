<?php

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Components\Checkbox;
use App\Http\Controllers\RecaptchaController;
use App\Http\Controllers\Redis\RedisController;
use App\Http\Controllers\Pages\Auth\EmailController;
use App\Http\Controllers\Pages\Auth\LoginController;
use App\Http\Controllers\Pages\Public\IndexController;
use App\Http\Controllers\Pages\Public\TermsController;
use App\Http\Controllers\Pages\Auth\RegisterController;
use App\Http\Controllers\Redis\RedisLanguageController;
use App\Http\Controllers\Pages\Public\PrivacyController;
use App\Http\Controllers\Pages\Private\PaymentsController;
use App\Http\Controllers\Pages\Private\ProfileController;
use App\Http\Controllers\Components\LogoutButtonController;
use App\Http\Controllers\Pages\Auth\EmailVerificationController;
use App\Http\Controllers\Pages\Private\DashboardController;
use App\Http\Controllers\Pages\Public\PublicOfferController;
use App\Http\Controllers\Pages\Public\ResetPasswordController;
use App\Http\Controllers\Pages\Public\ForgotPasswordController;
use App\Http\Controllers\Pages\Private\ReferredUsersController;

URL::forceScheme("https");


// MARK: Public Routes
Route::middleware("throttle:100,1")->group(function () {
    Route::get("/", IndexController::class)->name("public.index");
    Route::get("/terms", TermsController::class)->name("public.terms");
    Route::get("/privacy", PrivacyController::class)->name("public.privacy");
    Route::get("/public-offer", PublicOfferController::class)->name("public.public-offer");
    Route::get("/forgot-password", ForgotPasswordController::class)->name("public.password.forgot"); // rate limited (5,5)
    Route::get("/reset-password/{token}", ResetPasswordController::class)->name("password.reset"); // rate limited (5,5)
});

// MARK: Auth Routes
Route::middleware("throttle:100,1")->group(function () {
    Route::get("/auth/login", LoginController::class)->middleware(["_non-auth", "throttle:30,1"])->name("auth.login");
    Route::post("/auth/login/authenticate", [LoginController::class, "authenticate"])->middleware("_non-auth")->name("login.authenticate"); // rate limited (5,5)
    Route::get("/auth/register", RegisterController::class)->middleware(["_non-auth", "throttle:30,1"])->name("auth.register");
    Route::get("/auth/email", EmailController::class)->middleware(["_auth", "throttle:30,1", "signed"])->name("auth.email");
    Route::post("/auth/email/verifyEmail", [EmailController::class, "verifyEmail"])->middleware("_auth")->name("auth.email.verifyEmail"); // rate limited (1,1)
    Route::get("/email/verify/{id}/{hash}", EmailVerificationController::class)->middleware(["_auth", "throttle:10,1", "signed"])->name("verification.verify");
});

// MARK: Private Routes
Route::middleware(["_private", "throttle:100,1"])->group(function () {
    Route::get("/private/dashboard", DashboardController::class)->middleware("throttle:30,1")->name("private.dashboard");
    Route::get("/private/dashboard/viaTelegram/{user_id}", [DashboardController::class, "viaTelegram"])->middleware("signed")->name("private.dashboard.viaTelegram"); // rate limited in api (used only in api) (1,5)
    Route::get("/private/profile", ProfileController::class)->middleware("throttle:30,1")->name("private.profile");
    Route::get("/private/payments", PaymentsController::class)->middleware("throttle:30,1")->name("private.payments");
    Route::get("/private/referred-users", ReferredUsersController::class)->middleware("throttle:30,1")->name("private.referred.users");
});








/* +++++++++++++++++++ POST-JAVASCRIPT +++++++++++++++++++ */
Route::post("/post/recaptacha/verify", [RecaptchaController::class, "verify"])->name("post.recaptcha.verify");
Route::post("/post/redis/toggleState", [RedisController::class, "toggleState"])->name("post.redis.toggleState");
Route::post("/post/forgot-password/sendResetLink", [ForgotPasswordController::class, "sendResetLink"])->name("post.forgot-password.sendResetLink");
Route::post("/post/reset-password/resetPassword", [ResetPasswordController::class, "resetPassword"])->name("post.reset-password.resetPassword");
Route::post("/post/profile/updateImage", [ProfileController::class, "updateImage"])->name("post.profile.updateImage");
// Route::post("/post/profile/verifyEmail", [ProfileController::class, "verifyEmail"])->name("post.profile.verifyEmail");
Route::post("/post/components/side-menu/logout", [LogoutButtonController::class, "logout"])->name("post.components.side-menu.logout");
Route::post("/post/components/checkbox/setRememberMe", [Checkbox::class, "setRememberMe"])->name("post.components.checkbox.setRememberMe");

/* +++++++++++++++++++ LOCALE-SWITCHER +++++++++++++++++++ */
Route::get("language/{locale}", RedisLanguageController::class);
