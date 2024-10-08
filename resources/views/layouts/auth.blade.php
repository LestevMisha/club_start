<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ $title ?? 'КЛУБ START' }}</title>
    {{-- styles --}}
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/styles/global/authorization.css') }}">
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/styles/global/main.css') }}">
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/styles/global/light-mode.css') }}">
    @stack('components.styles')
    {{-- global script --}}
    <script src="{{ Vite::asset('resources/javascript/laravel/requests.js') }}"></script>
    <script src="{{ Vite::asset('resources/javascript/laravel/helpers.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.google.recaptcha.site_key') }}"></script>
</head>

<body class="{{ app('App\Http\Controllers\Redis\RedisThemeController')->getThemeStateClass() }}">

    <main class="main">
        @yield('content')
    </main>

    @stack('scripts')
</body>

</html>
