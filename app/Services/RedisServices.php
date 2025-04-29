<?php

namespace App\Services;

use Illuminate\Support\Facades\Redis;

class RedisServices {
    // Transfer preferences
    public function transferGuestPreferencesToUser(string $uuid, string $guestId) {
        $guestKey = "guests:{$guestId}";
        $userKey = "users:{$uuid}";

        // Get all guest data from Redis hash
        $guestData = Redis::hgetall($guestKey);

        if (!empty($guestData)) {
            // Merge each key-value pair into the user's Redis hash
            foreach ($guestData as $field => $value) {
                if (!Redis::hexists($userKey, $field)) {
                    Redis::hset($userKey, $field, $value);
                }
            }

            // Delete guest data
            Redis::del($guestKey);
        }
    }
}
