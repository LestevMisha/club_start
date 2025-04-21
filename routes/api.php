<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/auth/email/link', function (Request $request) {

    // Step 1: API key verification
    if (config("services.python_api_token") != $request->header("X-Api-Key")) return abort(403);

    // Step 2: Validate user_id input
    $user_id = $request->input("user_id");
    if (!$user_id) return abort(403);

    // Step 3: User not subscribed
    $userServices = app(\App\Services\Models\UserServices::class);
    $user = $userServices->getUser("user_id", $user_id);
    if (!$user || !$user->is_subscribed || $user->days_left <= 0) return abort(403);

    // Step 4: Email not verified
    $urlServices = app(\App\Services\URLServices::class);
    if (!$user->hasVerifiedEmail()) {
        return response()->json(['link' => $urlServices->generateLink("auth.email", 5, ['user_id' => $user_id])]);
    }

    // Step 5: Password not created
    if (!$user->password) {
        $passwordServices = app(\App\Services\PasswordServices::class);
        return response()->json(['link' => $passwordServices->generatePasswordResetLink($user)]);
    }

    // Step 6: Successful Login
    return response()->json(['link' => $urlServices->generateLink("private.dashboard", 5, ['uuid' => $user->uuid])]); // logic is in the App/Http/Middleware/_Private

});
// ->middleware("throttle:1,5");


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
