<?php

namespace App\Http\Controllers\Redis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    function toggleState(Request $request)
    {
        $name = $request->input("name");
        $current_state = Redis::get($name) ?? false;

        Redis::set($name, !$current_state);

        return response()->json([$name => !$current_state]);
    }

    function getState(Request $request)
    {
        $name = $request->query("name");
        $current_state = Redis::get($name);

        return response()->json([$name => $current_state]);
    }
}
