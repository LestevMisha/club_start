<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Partials\_ErrorServices;
use Illuminate\Support\Facades\RateLimiter;
use App\Services\Partials\_PartialServices;

class RateLimiterController extends Controller
{
    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct(
        protected _ErrorServices $_errorServices,
        protected _PartialServices $_partialServices,
    ) {}

    /**
     * Handle rate limiting for requests.
     *
     * @param string $key
     * @param string $input_key
     * @param int $maxAttempts
     * @param int $decaySeconds
     * @return mixed
     */
    public function rateLimiter(string $key, string $input_key, int $maxAttempts, int $decaySeconds = 60)
    {
        // Record a new attempt only if the rate limit has not been exceeded.
        RateLimiter::hit($key, $decaySeconds);
        if (RateLimiter::tooManyAttempts($key, $maxAttempts)) {
            $availableIn = RateLimiter::availableIn($key);
            return $this->_errorServices->getErrorViewJsonByString(
                "partials._input-error",
                __("login.limit_is_exceeded", ["seconds" => $availableIn]),
                $input_key,
                ['availableIn' => $availableIn]
            );
        }
    }

    public function rateGeometricLimiter(string $key, string $input_key)
    {
        // Check rate limiting and give specific error messages based on count
        $attempts = RateLimiter::attempts($key);
        logger("attempts: ");
        logger($attempts);
        $maxAttempts = [1 => 90, 2 => 300, 3 => 14400]; // seconds for each limit level
        $attemptTime = $maxAttempts[min($attempts, 3)] ?? 14400; // default to the last known limit if exceeded
        logger("attemptTime: ");
        logger($attemptTime);

        if (!RateLimiter::attempt($key, 1, fn() => true, $attemptTime)) {
            $waitSeconds = RateLimiter::availableIn($key);
            //   $waitTime = $this->secondsToHumanReadable($waitSeconds);
            return $this->_errorServices->getErrorViewJsonByString(
                "partials._input-error",
                __("login.limit_is_exceeded", ["seconds" => $waitSeconds]),
                $input_key,
                ['availableIn' => $waitSeconds]
            );
        }
    }

    public function clearRateLimit(string $key): void
    {
        RateLimiter::clear($key);
    }

    public function generateThrottleKey(string $key, string $input_key, Request $request): string
    {
        return "{$key}:" . md5($request->get($input_key) . $request->ip());
    }

    public function generateUserThrottleKey(string $key, Request $request): string
    {
        return "{$key}:" . md5($request->ip());
    }
}
