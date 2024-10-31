<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="recaptcha-site-key" content="{{ config('services.google.recaptcha.site_key') }}" />
    <title>{{ $title ?? 'КЛУБ START' }}</title>
    {{-- preload --}}
    @yield('index-preload')
    {{-- styles --}}
    @yield('index-styles')
    @yield('login-styles')
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/styles/global/main.css') }}">
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/styles/global/light-mode.css') }}">
    {{-- global script --}}
    <script src="{{ Vite::asset('resources/javascript/laravel/requests.js') }}"></script>
    <script src="{{ Vite::asset('resources/javascript/laravel/helpers.js') }}"></script>
    @stack('components.styles')
</head>

<body class="{{ app('App\Http\Controllers\Redis\RedisThemeController')->getThemeStateClass() }}">

    <main class="main">
        <x-header.compiled />
        @yield('content')
    </main>

    {{-- javascript --}}
    @stack('scripts')

    @yield('index-script')
    @yield('forgot-password-script')
    @yield('card-credentials-script')
    @yield('reCAPTCHA-script')

    @stack('scripts')
</body>

</html>
