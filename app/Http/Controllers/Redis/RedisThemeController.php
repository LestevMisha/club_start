<?php

namespace App\Http\Controllers\Redis;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class RedisThemeController extends Controller
{

    protected $name = "theme-state";

    function getThemeState()
    {
        return Redis::get($this->name);
    }

    function getThemeStateClass()
    {
        return $this->getThemeState() ? 'lightMode' : 'darkMode';
    }
}
