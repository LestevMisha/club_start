<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteVisitorsData extends Model
{
    use HasFactory;

    protected $fillable = ["date", "visit_count"];
}
