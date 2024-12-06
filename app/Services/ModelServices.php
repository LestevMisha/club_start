<?php

namespace App\Services;

use App\Models\User;
use App\Models\UsersImages;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Models\CardCredentials;
use App\Models\WebsiteVisitorsData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class ModelServices
{
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
            $user->increment('amount_earned', $amount);
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

    // Create a new card credentials
    public function createCardCredentials($full_name, $card_number, $security_code, $expiration_year, $expiration_month)
    {
        // block any duplicates
        if (CardCredentials::where("user_uuid", Auth::user()->uuid)->first()) return;
        return CardCredentials::create([
            'uuid' => Str::orderedUuid()->toString(),
            'user_uuid' => Auth::user()->uuid,
            'full_name' => $full_name,
            'card_number' => $card_number,
            'security_code' => $security_code,
            'expiration_year' => $expiration_year,
            'expiration_month' => $expiration_month,
        ]);
    }

    // Get card credentials
    public function getCardCredentials($user_uuid)
    {
        return CardCredentials::where('user_uuid', $user_uuid)->first();
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
    }

    // Retrieve visitor stats
    public function getVisitorData()
    {
        $visitors = WebsiteVisitorsData::select('date', 'visit_count')
            ->whereBetween('date', [Carbon::now()->subDays(7), Carbon::now()]) // Last 30 days
            ->get();

        return response()->json(data: $visitors);
    }
}
