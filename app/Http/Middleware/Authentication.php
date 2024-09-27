<?php

namespace App\Http\Middleware;

use App\Services\GlobalServices;
use App\Services\ModelServices;
use App\Services\TelegramServices;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authentication
{

    public function __construct(
        protected GlobalServices $globalServices,
        protected ModelServices $modelServices,
        protected TelegramServices $telegramServices,
    ) {}

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $route = $request->route()->getName();
        $isPrivate = str_contains($route, "private");

        if (!$this->globalServices->isDatabaseConnected())  return redirect("/error");
        if (!$this->globalServices->isUserAuthenticated())  return $isPrivate ? redirect("/register") : $next($request);
        if (!$this->globalServices->isTelegramVerified())   return $isPrivate ? redirect("/register") : $next($request);
        if (!$this->globalServices->hasPaidSubscription())  return $this->globalServices->fullPaymentProcessing($request);
        return $isPrivate ? $next($request) : redirect("/dashboard");
    }
}
