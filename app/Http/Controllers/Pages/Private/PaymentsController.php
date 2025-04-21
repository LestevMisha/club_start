<?php

namespace App\Http\Controllers\Pages\Private;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class PaymentsController extends Controller
{
    public function __construct() {}

    public function __invoke()
    {
        $payments = Payment::where('user_id', Auth::user()->user_id)->orderBy("created_at", "desc")->get();
        return view("pages.private.payments.bundled", ["payments" => $payments]);
    }
}
