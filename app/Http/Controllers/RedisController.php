<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller {

    /* +++++++++++++++++++ PUBLIC SECTION +++++++++++++++++++ */
    public function persistAcross($key, $value) {
        if (auth()->check()) {
            // Logged-in user
            $uuid = auth()->user()->uuid;
            Redis::hset("users:{$uuid}", $key, $value);
        } else {
            // Guest user
            $guestId = session()->getId();
            $redisKey = "guests:{$guestId}";
            Redis::hset($redisKey, $key, $value);
            Redis::expire($redisKey, 60 * 60 * 24 * 7); // Expire after 7 days
        }

        return redirect()->back();
    }

    // Theme states
    public function toggleThemeState() {
        $redisKey = $this->getRedisKey();

        $current = Redis::hget($redisKey, "theme") === '1'; // Redis stores strings
        $newState = !$current;

        Redis::hset($redisKey, "theme", $newState);

        // Optional expiration for guests
        if (!auth()->check()) {
            Redis::expire($redisKey, 60 * 60 * 24 * 7);
        }

        return response()->json(["theme" => $newState]);
    }

    public function _getThemeState(bool $isClass = false): mixed {
        // get redis key
        $redisKey = $this->getRedisKey();
        $state = Redis::hget($redisKey, 'theme') === '1';

        if ($isClass) return $state ? 'light' : 'dark';
        return $state;
    }

    protected function getRedisKey(): string {
        return auth()->check() ? "users:" . auth()->user()->uuid : "guests:" . session()->getId();
    }
}
