<?php

namespace App\Http\Controllers\Redis;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class RedisThemeController extends Controller
{
    function getThemeState()
    {
        return Redis::get("js-theme-switcher");
    }

    function getThemeStateClass()
    {
        return $this->getThemeState() ? 'lightMode' : 'darkMode';
    }
}
