<?php

namespace App\Http\Middleware\Pages;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class _Unauthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        # Allowed if: user isn't logged in and has unverified email
        if (auth()->check()) return redirect()->route('private.dashboard');

        return $next($request);
    }
}
