<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class SaveReferral {
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response {
        $referralId = $request->query('referred_by_uuid');

        // If referral ID is present, queue the cookie
        if ($referralId) {
            Cookie::queue("referred_by_uuid", $referralId, 60 * 24); // 24 hours
        }

        return $next($request);
    }
}
