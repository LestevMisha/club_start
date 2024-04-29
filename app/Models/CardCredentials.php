<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardCredentials extends Model
{
    use HasFactory;

    protected $casts = [
        'card_number' => "encrypted",
    ];

    protected $fillable = [
        'uuid',
        'user_uuid',
        'card_number',
    ];
}
