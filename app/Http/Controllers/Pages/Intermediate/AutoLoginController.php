<?php

namespace App\Http\Controllers\Pages\Intermediate;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AutoLoginController extends Controller
{
    public function __invoke(Request $request)
    {
        // First, check if the signature is valid
        if (!$request->hasValidSignature()) {
            logger($request->hasValidSignature());
            logger("here 1");
            return response("Invalid request", 400);
        }

        // (security verification) Retrieve the user sing Telegram ID and UUID
        try {
            logger("here 2");
            $decryptedTid = decrypt($request->query('tid'));
            $userUuid = decrypt($request->query('uuid'));
            logger("decryptedTid: " . $decryptedTid);
            logger("userUuid: " . $userUuid);
        } catch (Exception $e) {
            // If tampered or invalid, decrypt() will throw an exception
            return response("Invalid request", 400);
        }

        $user = User::where('telegram_id', $decryptedTid)
            ->where('uuid', $userUuid)
            ->first();

        if (!$user) {
            return response("Invalid request", 400);
        }

        // Log the user in (using Laravel’s Auth system)
        Auth::login($user);

        // Redirect the user to the payment page (or any other page)
        return redirect('/payment');
    }
}
