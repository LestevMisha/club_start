<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersTransactions extends Model
{
    use HasFactory;
    protected $fillable = ['transaction_uuid', 'transaction_status', 'transaction_amount', 'transaction_description', 'transaction_referred_by_id', 'transaction_recurring_payment_flag', 'user_uuid', 'user_ip_address', 'yookassa_transaction_id', 'yookassa_payment_method_id'];
}