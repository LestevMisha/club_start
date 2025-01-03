<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        logger($request->getPreferredLanguage(['en', 'ru', 'es']));

        $locale = Redis::get("locale") ?? false;
        if ($locale) {
            App::setLocale($locale);
        }
        return $next($request);
    }
}
