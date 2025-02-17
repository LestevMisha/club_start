<?php

namespace App\Http\Controllers\Pages\Private;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class TransactionsController extends Controller
{
    public function __construct() {}

    public function __invoke()
    {
        $transactions = Transaction::where('account_id', Auth::user()->uuid)->orderBy("created_at", "desc")->get();
        return view("pages.private.transactions", ["transactions" => $transactions]);
    }
}
