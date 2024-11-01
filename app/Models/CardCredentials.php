<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardCredentials extends Model
{
    use HasFactory;

    protected $casts = [
        'full_name' => "encrypted",
        'card_number' => "encrypted",
        'security_code' => "encrypted",
        'expiration_year' => "encrypted",
        'expiration_month' => "encrypted",
    ];

    protected $fillable = [
        'uuid',
        'user_uuid',
        'full_name',
        'card_number',
        'security_code',
        'expiration_year',
        'expiration_month',
    ];
}
