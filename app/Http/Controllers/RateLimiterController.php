<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\RateLimiter;
use App\Services\Partials\_InputErrorServices;

class RateLimiterController extends Controller
{
    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct(
        protected _InputErrorServices $_inputErrorServices
    ) {}

    public function rateLimiter(string $key, string $input_key, int $maxAttempts, int $decaySeconds = 60)
    {
        // Attempt to execute authentication with rate limiting
        $executed = RateLimiter::attempt($key, $maxAttempts, fn() => true, $decaySeconds);

        if ($executed) return;

        $availableIn = RateLimiter::availableIn($key);
        return $this->_inputErrorServices->getErrorViewJsonByString(
            __("login.limit_is_exceeded", ["seconds" => $availableIn]),
            $input_key,
            ['availableIn' => $availableIn]
        );
    }

    /**
     * Generate a throttle key for rate limiting.
     *
     * @param Request $request
     * @return string
     */
    public function generateThrottleKey(string $key, string $input_key, Request $request): string
    {
        return "{$key}:" . md5($request->get($input_key) . $request->ip());
    }

    /**
     * Generate a throttle key binded to user's API for rate limiting.
     *
     * @param Request $request
     * @return string
     */
    public function generateUserThrottleKey(string $key, Request $request): string
    {
        return "{$key}:" . md5($request->ip());
    }
}
