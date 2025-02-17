<?php

namespace App\Http\Controllers\Pages\Auth;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{

    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct(
        protected \App\Services\Models\UserServices $userServices,
    ) {}

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request)
    {
        try {
            // Get the user information from Google
            $google_user = Socialite::driver('google')->user();
            $google_id = $google_user->id;
            $email = $google_user->email;


            // Check if the user already exists in the database
            $user = $this->userServices->getUser("google_id", $google_id);

            if ($user) {
                $request->session()->regenerate();
                Auth::login($user);
                return redirect()->route("private.dashboard");
            } else {
                // data from cookies
                $referred_by_uuid = $request->cookie("referred_by_uuid", "");
                $password = bcrypt(Str::random(16));

                // create a new user
                $userData = [
                    "name" => $google_user->name,
                    "email" => $email,
                    'google_id' => $google_id,
                    "referred_by_uuid" => $referred_by_uuid,
                ];
                $user = $this->userServices->createUser($userData, $password);

                // send verification letter
                event(new Registered($user));

                // authentificate user
                if (Auth::attempt(compact('email', 'password'))) return redirect()->route("intermediate.telegram.verify");
            }
        } catch (Exception $e) {
            return response("Invalid request", 400);
        }
    }
}
