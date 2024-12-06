<!DOCTYPE html>
<html class="overflow-x-hidden" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="recaptcha-site-key" content="{{ config('services.google.recaptcha.site_key') }}" />
    <title>{{ $title ?? 'КЛУБ START' }}</title>
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/styles/global/main.css') }}">
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/styles/global/light-mode.css') }}">
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.google.recaptcha.site_key') }}"></script>
    <style>
        .grecaptcha-badge {
            visibility: hidden !important;
        }
    </style>
    @vite('resources/styles/fonts.css')
    @vite('resources/styles/uikit.css')
    @stack('pages.public.preload')
    @stack('pages.public.styles')
    @stack('components.styles')
</head>

<body class="{{ app('App\Http\Controllers\Redis\RedisThemeController')->getThemeStateClass() }} overflow-hidden">

    @yield('content')

    {{-- javascript --}}
    <script src="{{ Vite::asset('resources/javascript/main.js') }}"></script>
    @stack('pages.public.scripts')
    @stack('components.scripts')
</body>

</html>
