<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthLinkController extends Controller {

    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct(
        protected \App\Services\Models\UserServices $userServices,
        protected \App\Services\PasswordServices $passwordServices,
        protected \App\Services\URLServices $urlServices,
    ) {}

    /* +++++++++++++++++++ INITIALIZATION +++++++++++++++++++ */
    public function __invoke(Request $request) {

        // Step 1: API key verification
        if (config("services.python_api_token") != $request->header("X-Api-Key")) return abort(403);

        // Step 2: Validate user_id input
        $user_id = $request->input("user_id");
        if (!$user_id) return abort(403);

        // Step 3: User not subscribed
        $user = $this->userServices->getUser("user_id", $user_id);
        if (!$user || !$user->is_subscribed || $user->days_left <= 0) return abort(403);

        // Step 4: Email not verified
        if (!$user->hasVerifiedEmail()) {
            return response()->json(['link' => $this->urlServices->generateLink("auth.email", 5, ['user_id' => $user_id])]);
        }

        // Step 5: Password not created
        if (!$user->password) {
            return response()->json(['link' => $this->passwordServices->generatePasswordResetLink($user)]);
        }

        // Step 6: Successful Login
        return response()->json(['link' => $this->urlServices->generateLink("private.dashboard", 5, ['uuid' => $user->uuid])]); // logic is in the App/Http/Middleware/_Private
    }
}
