<?php

namespace App\Http\Middleware\Pages;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class _Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        # Allowed if: user isn't logged in and has unverified email
        
        // auto logout if user was kciked and account disabled
        if (auth()->user()?->kicked_at) {
            Auth::logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
        }

        if (auth()->user()?->email_verified_at) return redirect()->route('private.dashboard');

        return $next($request);
    }
}
