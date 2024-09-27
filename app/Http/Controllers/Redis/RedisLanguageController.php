<?php

namespace App\Http\Controllers\Redis;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class RedisLanguageController extends Controller
{
    public function __invoke($locale)
    {
        // Set the locale in Redis
        Redis::set("locale", $locale);

        // Redirect back to the previous page
        return redirect()->back();
    }
}
