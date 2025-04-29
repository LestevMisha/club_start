<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\RateLimiter;

class RateLimiterController extends Controller
{
    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct(
        protected \App\Services\Partials\_PartialServices $respond,
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
        if (RateLimiter::tooManyAttempts($key, $maxAttempts)) {
            $availableIn = RateLimiter::availableIn($key);
            // Respond with error
            return $this->respond->renderErrors(
                [$input_key => __("login.limit_is_exceeded", ["seconds" => $availableIn])],
                "partials._input-error-message",
                ["availableIn" => $availableIn],
            );
        }
        RateLimiter::hit($key, $decaySeconds);
    }

    /**
     * Summary of clearRateLimit
     * @param string $key
     * @return void
     */
    public function clearRateLimit(string $key): void
    {
        RateLimiter::clear($key);
    }

    /**
     * Summary of generateThrottleKey
     * @param string $key
     * @param string $input_key
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    public function generateThrottleKey(string $key, string $input_key, Request $request): string
    {
        return "{$key}:" . md5($request->get($input_key) . $request->ip());
    }

    /**
     * Summary of generateUserThrottleKey
     * @param string $key
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    public function generateUserThrottleKey(string $key, Request $request): string
    {
        return "{$key}:" . hash('sha256', $request->userAgent() . $request->ip());
    }
}
