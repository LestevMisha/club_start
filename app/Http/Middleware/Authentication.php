<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Authentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $route = $request->route()->getName();

        // categories
        $isAuth = str_contains($route, "auth");
        $isPrivate = str_contains($route, "private");
        $isIntermediateTelegram = str_contains($route, "intermediate.telegram.verify");
        $isIntermediatePayment = str_contains($route, "intermediate.payment");

        if (!Auth::check())                 return $isAuth                    ? $next($request) : redirect()->route("auth.register"); // if user didn't login or register
        if (!Auth::user()->telegram_id)     return $isIntermediateTelegram    ? $next($request) : redirect()->route("intermediate.telegram.verify"); // if user has unverified telegram
        if (Auth::user()->days_left <= 0)   return $isIntermediatePayment     ? $next($request) : redirect()->route("intermediate.payment"); // if user has paid subscription

        return $isPrivate ? $next($request) : redirect()->route("private.dashboard");
    }
}
