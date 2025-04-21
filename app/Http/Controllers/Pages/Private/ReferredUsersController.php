<?php

namespace App\Http\Controllers\Pages\Private;

use App\Http\Controllers\Controller;

class ReferredUsersController extends Controller
{
    public function __construct(
        protected \App\Services\Models\UserServices $userServices,
        protected \App\Services\Models\PaymentServices $paymentServices,
    ) {}


    public function __invoke()
    {
        $current_user_referral_uuid = auth()->user()->referral_uuid;
        $referred_users = $this->userServices->getUsers("referred_by_uuid", $current_user_referral_uuid);
        foreach ($referred_users as $user) {
            $payment = $this->paymentServices->getPayment("user_id", $user->user_id);
            $user->payment = $payment;
        }

        return view("pages.private.referred-users.bundled", [
            "referred_users" => $referred_users,
        ]);
    }
}
