<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('layouts.header')
</head>

<body class="{{ app(\App\Http\Controllers\RedisController::class)->_getThemeState(true) }}">

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')
    @stack('pages.auth.scripts')
</body>

</html>
