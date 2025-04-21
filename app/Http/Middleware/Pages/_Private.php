<?php

namespace App\Http\Middleware\Pages;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class _Private
{

    public function __construct(
        protected \App\Services\TelegramServices $telegramServices,
    ) {}

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();

        // telegram auto login system (refer to routes/api.php::/auth/email/link)
        if ($request->routeIs('private.dashboard')) {
            if ($request->hasValidSignature()) {
                $uuid = $request->input("uuid");
                if ($uuid) {
                    $userServices = app(\App\Services\Models\UserServices::class);
                    $user = $userServices->getUser("uuid", $uuid);
                    if ($user) {
                        Auth::login($user);
                        return $next($request);
                    }
                }
            }
        }

        if (!$user) return redirect()->route("auth.login");
        // auto logout if user was kciked and account disabled
        if ($user->kicked_at) {
            Auth::logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
        }
        if (!$user->is_subscribed) return redirect($this->telegramServices->getCustomTelegramLink("subscribe", $user->uuid));
        if (!$user->email_verified_at) return redirect($this->telegramServices->getCustomTelegramLink("sign", $user->uuid));
        if (!$user->password) return redirect()->route("public.password.forgot");

        return $next($request);
    }
}
