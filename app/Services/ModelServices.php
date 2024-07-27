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
    public function createUser($name, $email, $password, $referred_referral_id)
    {
        return User::create([
            'uuid' => Str::orderedUuid()->toString(),
            'referral_id' => Str::orderedUuid()->toString(),
            'referred_referral_id' => $referred_referral_id,
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

    // Delete a users transactions
    public function deleteUsersTransactions($user_uuid)
    {
        return UsersTransactions::where("user_uuid", $user_uuid)->delete();
    }

    // Delete a users images
    public function deleteUsersImages($user_uuid)
    {
        return UsersImages::where("user_uuid", $user_uuid)->delete();
    }

    // Delete a users card credentials
    public function deleteUsersCardCredentials($user_uuid)
    {
        return CardCredentials::where("user_uuid", $user_uuid)->delete();
    }

    // Update days left for user
    public function updateUserDays(string $uuid, string $days_added)
    {
        $user = User::where("uuid", $uuid)->first();
        $user->increment('days_left', $days_added);
    }

    // Update amount partner earned from transaction
    public function updatePartnerAmount(string $referred_referral_id, string $amount)
    {
        $user = User::where("referral_id", $referred_referral_id)?->first();
        if ($user) {
            $user->increment('amount', $amount);
        } else {
            // TODO
        }
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
        // block any duplicates
        // if (CardCredentials::where("user_uuid", Auth::user()->uuid)->first()) return;
        return CardCredentials::create([
            'uuid' => Str::orderedUuid()->toString(),
            'user_uuid' => Auth::user()->uuid,
            'card_number' => $card_number,
        ]);
    }

    // Get card credentials
    public function getCardCredentials($user_uuid)
    {
        return CardCredentials::where('user_uuid', $user_uuid)->first();
    }

    // Create a new transaction
    public function createTransaction($user, $ip, $amount, $description, $referred_referral_id = "", $payment_method_id = "")
    {
        return UsersTransactions::create([
            "uuid" => Str::orderedUuid()->toString(),
            "user_uuid" => $user->uuid,
            "email" => $user->email,
            "telegram_id" => $user->telegram_id,
            "referred_referral_id" => $referred_referral_id, // optional
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
        return UsersImages::where("user_uuid", Auth::user()->uuid)->exists();
    }

    // Update or create user's profile image
    public function updateOrCreateImage($uuid, $image_data)
    {
        $image = UsersImages::where('user_uuid', $uuid)->first();
        if ($image) return $image->update(['image_data' => $image_data,]);
        return UsersImages::create(['uuid' => Str::orderedUuid()->toString(), 'user_uuid' => $uuid, 'image_data' => $image_data,]);
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
