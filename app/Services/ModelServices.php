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
            'uuid' => Str::orderedUuid()->toString(),
            'referral_id' => Str::orderedUuid()->toString(),
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

    // Retrieve the first transaction with the given UUID and a non-null referral ID
    public function getFirstUserTransaction($whereKey, $whereValue)
    {
        return UsersTransactions::where($whereKey, $whereValue)
            ->whereNotNull('payment_method_id') // make sure that payment method is set
            ->first();
    }

    // Delete a user
    public function deleteUser($email)
    {
        session()->flush();
        return User::where("email", $email)->delete();
    }

    // Update days left for user
    public function updateUserDays(string $uuid, string $days_added)
    {
        $user = User::where("uuid", $uuid)->first();
        $user->increment('days_left', $days_added);
    }

    // Update amount partner earned from transaction
    public function updatePartnerAmount(string $referral_id, string $amount)
    {
        $user = User::where("referral_id", $referral_id)->first();
        $user->increment('amount', $amount);
    }

    // Update user row
    public function updateUser($whereKey, $whereValue, $row, $value)
    {
        $userModel = User::where($whereKey, $whereValue)->first();
        if ($userModel && $userModel->offsetExists($row)) {
            $userModel->{$row} = $value;
            $userModel->save();
            return true;
        }
        return false;
    }

    // Update users transactions row
    public function updateUsersTransactions($whereKey, $whereValue, $row, $value)
    {
        $userModel = UsersTransactions::where($whereKey, $whereValue)->first();
        if ($userModel && $userModel->offsetExists($row)) {
            $userModel->{$row} = $value;
            $userModel->save();
            return true;
        }
        return false;
    }

    // Create a new card credentials
    public function createCardCredentials($card_number)
    {
        return CardCredentials::create([
            'uuid' => Auth::user()->uuid,
            'card_number' => $card_number,
        ]);
    }

    // Get card credentials
    public function getCardCredentials($uuid)
    {
        return CardCredentials::where('uuid', $uuid)->first();
    }

    // Create a new transaction
    public function createTransaction($user, $ip, $amount, $description, $referral_id = null, $payment_method_id = null)
    {
        return UsersTransactions::create([
            "uuid" => Str::orderedUuid()->toString(),
            "user_uuid" => $user->uuid,
            "email" => $user->email,
            "telegram_id" => $user->telegram_id,
            "referral_id" => $referral_id, // optional
            "ip" => $ip,
            "amount" => $amount,
            "description" => $description,
            "payment_method_id" => $payment_method_id // optional
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

    // Logout user
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('main');
        // return redirect()->route('login')->withErrors(["email" => 'Вы успешно вышли из аккаунта.'])->onlyInput("email");
    }
}
