<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RemoveQueries {
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response {
        // If there are query parameters, redirect to the URL without them
        if ($request->getQueryString()) {
            return redirect($request->url());
        }

        // Otherwise, continue the request
        return $next($request);
    }
}
