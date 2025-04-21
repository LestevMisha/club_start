<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    public $timestamps = false;

    protected $fillable = [
        'invoice_id',
        'user_id',
        'amount',
        'currency',
        'status',
        'offer_id',
        'payment_url',
        'periodicity',
        'strikes',
        'cancelled_at',
        'expires_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
    
}
