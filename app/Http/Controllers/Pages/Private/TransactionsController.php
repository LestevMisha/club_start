<?php

namespace App\Http\Controllers\Pages\Private;

use App\Models\UsersTransactions;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TransactionsController extends Controller
{
    public function __construct() {}

    public function __invoke()
    {
        $users_transactions = UsersTransactions::where('user_uuid', Auth::user()->uuid)->orderBy("created_at", "desc")->get();
        return view("pages.private.transactions", ["users_transactions" => $users_transactions]);
    }
}
