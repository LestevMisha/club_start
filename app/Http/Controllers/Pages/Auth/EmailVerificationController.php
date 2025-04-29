<?php

namespace App\Http\Controllers\Pages\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\URL;

class EmailVerificationController extends Controller {

    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct(
        protected \App\Services\Models\UserServices $userServices,
    ) {}

    /* +++++++++++++++++++ PUBLIC SECTION +++++++++++++++++++ */
    /**
     * Handle an email verification attempt.
     */
    public function __invoke($id, $hash) {
        $user = $this->userServices->canVerifyEmail("id", $id);

        // Manually verify the hash
        if (!hash_equals((string) $hash, sha1($user->getEmailForVerification())))
        return abort(403);

        // 🔐 Log the user in automatically
        $user->markEmailAsVerified();
        Auth::login($user);

        // Generate password reset token
        $token = Password::createToken($user);

        $resetUrl = URL::route("password.reset", [
            "token" => $token,
            "email" => $user->email,
        ]);

        return redirect($resetUrl);
    }
}
