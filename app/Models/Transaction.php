<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'uuid',
        'referred_by_uuid',
        'is_recurring',
        'status',
        'transaction_id',
        'amount',
        'payment_currency',
        'invoice_id',
        'account_id',
        'description',
        'card_first_six',
        'card_last_four',
        'card_type',
        'card_exp_date',
        'auth_code',
        'test_mode',
        'created_date',
        'auth_date',
        'confirm_date',
        'reason_code',
        'reason',
        'card_token',
        'ip_address',
    ];
}
