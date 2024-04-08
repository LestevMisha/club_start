<?php

namespace App\Services;

use App\Models\User;
use App\Models\UsersImages;
use Illuminate\Support\Str;
use App\Models\CardCredentials;
use App\Models\UsersTransactions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class ModelServices
{

    // Create a new user
    public function createUser($name, $email, $password)
    {
        return User::create([
            'uuid' => Str::uuid()->toString(),
            'referral_id' => Str::uuid()->toString(),
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);
    }

    // Get every user waiting for withdrawal
    public function getWithdrawalUsers()
    {
        return User::where("withdrawal_notification_sent", 1)->get();
    }

    // Delete a user
    public function deleteUser($email)
    {
        session()->flush();
        return User::where("email", $email)->delete();
    }

    // Update user row
    public function updateUser($user, $row, $value)
    {
        $userModel = User::where("uuid", $user->uuid)->first();
        if ($userModel && $userModel->offsetExists($row)) {
            $userModel->{$row} = $value;
            $userModel->save();
            return true;
        }
        return false;
    }

    // Create a new card credentials
    public function createCardCredentials($full_name, $card_number, $security_code, $expires_at)
    {
        return CardCredentials::create([
            'uuid' => Auth::user()->uuid,
            'full_name' => $full_name,
            'card_number' => $card_number,
            'security_code' => $security_code,
            'expires_at' => $expires_at,
        ]);
    }

    // Get card credentials
    public function getCardCredentials($uuid)
    {
        return CardCredentials::where('uuid', $uuid)->first();
    }

    // Create a new transaction
    public function createTransaction($user, $ip, $amount, $description, $referral_id = "")
    {
        return UsersTransactions::create([
            "uuid" => $user->uuid,
            "email" => $user->email,
            "telegram_id" => $user->telegram_id,
            "referral_id" => $referral_id,
            "ip" => $ip,
            "amount" => $amount,
            "description" => $description,
        ]);
    }

    // Get user's transactions
    public function observeUsersTransactions($user)
    {
        return UsersTransactions::where('uuid', $user->uuid)->orderBy('created_at', "desc")->get();
    }

    // Check if user has a profle image
    public function hasImage()
    {
        return UsersImages::where("uuid", Auth::user()->uuid)->exists();
    }

    // Update or create user's profile image
    public function updateOrCreateImage($uuid, $image_data)
    {
        $image = UsersImages::where('uuid', $uuid)->first();
        if ($image) return $image->update(['image_data' => $image_data,]);
        return UsersImages::create(['uuid' => $uuid, 'image_data' => $image_data,]);
    }











    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('main');
        // return redirect()->route('login')->withErrors(["email" => 'Вы успешно вышли из аккаунта.'])->onlyInput("email");
    }

    public function logout_admin()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
        // return redirect()->route('login')->withErrors(["email" => 'Вы успешно вышли из аккаунта.'])->onlyInput("email");
    }
}
