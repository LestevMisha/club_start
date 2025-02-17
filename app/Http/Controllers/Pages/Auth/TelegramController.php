<?php

namespace App\Http\Controllers\Pages\Auth;

use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\TelegramServices;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class TelegramController extends Controller
{

    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct(
        protected \App\Services\Models\UserServices $userServices,
        protected \App\Services\Models\AvatarServices $avatarServices,
        protected TelegramServices $telegramServices,
    ) {}

    public function redirectToTelegram()
    {
        return Socialite::driver('telegram')->redirect();
    }

    public function handleTelegramCallback(Request $request)
    {
        try {
            // Get the user information from Google
            $telegram_user = Socialite::driver('telegram')->user();
            $email = $telegram_user?->email ?? "";
            $telegram_id = $telegram_user?->id ?? "";


            // Check if the user already exists in the database
            $user = $this->userServices->getUser("telegram_id", $telegram_id);

            if ($user) {
                $request->session()->regenerate();
                Auth::login( $user);
                return redirect()->route("private.dashboard");
            } else {

                // data from cookies
                $referred_by_uuid = $request->cookie("referred_by_uuid", "");
                $password = bcrypt(Str::random(16));

                // create a new user
                $userData = [
                    "name" => $telegram_user?->name,
                    "email" => $email,
                    "telegram_username" => $telegram_user?->nickname,
                    'telegram_id' => $telegram_id,
                    "referred_by_uuid" => $referred_by_uuid,
                ];
                $new_user = $this->userServices->createUser($userData, $password);

                $uuid = $new_user->uuid;

                if (!$this->avatarServices->hasAvatar($uuid)) {
                    $this->telegramServices->observeSaveUserImage($telegram_id, $uuid);
                }

                // authentificate user
                if (Auth::attempt(compact('email', 'password'))) return redirect()->route("intermediate.payment");
            }
        } catch (Exception $e) {
            return response("Invalid request", 400);
        }
    }
}
