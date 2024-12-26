<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="recaptcha-site-key" content="{{ config('services.google.recaptcha.site_key') }}" />
    <title>{{ $title ?? 'КЛУБ START' }}</title>

    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.google.recaptcha.site_key') }}"></script>
    <style>
        .grecaptcha-badge {
            visibility: hidden !important;
        }
    </style>

    {{-- styles --}}
    @vite('resources/styles/uikit.css')
    @stack('pages.private.styles')
    @stack('components.styles')
</head>

<body class="{{ app('App\Http\Controllers\Redis\RedisThemeController')->getThemeStateClass() }} bg-[#f8f8f8] dark:bg-[#0c0c0c]">

    @yield('content')

    {{-- javascript --}}
    <script src="{{ Vite::asset('resources/javascript/main.js') }}"></script>
    @stack('pages.private.scripts')
    @stack('components.scripts')
</body>

</html>
