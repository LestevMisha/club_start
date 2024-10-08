<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersTransactions extends Model
{
    use HasFactory;
    protected $fillable = ['email', 'telegram_id', 'uuid', 'user_uuid', 'yookassa_transaction_id', 'payment_method_id', 'status', 'referred_referral_id', 'amount', 'description', 'ip'];
}
