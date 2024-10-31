<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\ModelServices;
use App\Services\GlobalServices;
use App\Services\TelegramServices;
use App\Services\UsersTransactionsServices;
use Symfony\Component\HttpFoundation\Response;

class Authentication
{

    public function __construct(
        protected UsersTransactionsServices $usersTransactionsServices,
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

        // categories
        $isPrivate = str_contains($route, "private");
        $isIntermediate = str_contains($route, "intermediate");

        if (!$this->globalServices->isDatabaseConnected()) return redirect("/error"); // if hosting's database stopped working
        if (!$this->globalServices->isUserAuthenticated()) return ($isPrivate || $isIntermediate) ? redirect()->route("auth.register") : $next($request); // if user didn't login or register
        if (!$this->globalServices->isTelegramVerified()) return $isIntermediate ? $next($request) : redirect()->route("intermediate.telegram.verify"); // if user has unverified telegram
        if (!$this->usersTransactionsServices->checkIfSubscriptionIsPaid(auth()->user())) return redirect($this->usersTransactionsServices->createUserTransactionWithPayment(
            6000,
            "Регистрация оплата 6 000 руб.",
            $request->cookie("transaction_referred_by_id", ""),
            $request->cookie("transaction_recurring_payment_flag", ""),
            auth()->user()->uuid,
            $request->ip(),
            "",
            "",
        )); // if user has not yet paid subscription

        return $isPrivate ? $next($request) : redirect()->route("private.dashboard");
    }
}
