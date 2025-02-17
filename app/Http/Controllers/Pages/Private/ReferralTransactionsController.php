<?php

namespace App\Http\Controllers\Pages\Private;

use App\Models\Transaction;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReferralTransactionsController extends Controller
{
    public function __construct() {}

    public function __invoke()
    {
        $referred_users_transactions = Transaction::where('referred_by_uuid', Auth::user()->referral_uuid)->orderBy("created_at", "desc")->get();
        return view("pages.private.referral-transactions", ["referred_users_transactions" => $referred_users_transactions]);
    }
}

