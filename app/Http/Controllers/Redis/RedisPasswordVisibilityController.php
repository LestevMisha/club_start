<?php

namespace App\Http\Controllers\Redis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class RedisPasswordVisibilityController extends Controller
{
    function getPasswordVisibilityState($key)
    {
        return Redis::get($key);
    }
}
