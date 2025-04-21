<?php

namespace App\Services\Models;

use App\Models\Payment;

class PaymentServices
{
    // Returns payment instance
    public function getPayment($whereKey, $whereValue, string $order = "desc"): Payment|null
    {
        return Payment::where($whereKey, $whereValue)->orderBy('created_at', $order)->first();
    }
}
