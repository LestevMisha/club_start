<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redis;

class SetLocale {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) {
        // logger($request->getPreferredLanguage(['en', 'ru', 'es']));
        $locale = null;

        if (auth()->check()) {
            $uuid = auth()->user()->uuid;
            $locale = Redis::hget("users:" . $uuid, "locale");
        } else {
            $guestId = session()->getId();
            $locale = Redis::hget("guests:" . $guestId, "locale");
        }

        # set locale if present
        if ($locale) {
            App::setLocale($locale);
        }
        return $next($request);
    }
}
