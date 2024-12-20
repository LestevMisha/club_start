<!DOCTYPE html>
<html class="overflow-x-hidden" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('layouts.header')
    <style>
        .grecaptcha-badge {
            visibility: hidden !important;
        }
    </style>
    @stack('pages.public.preload')
    @stack('pages.public.styles')
</head>

<body class="{{ app('App\Http\Controllers\Redis\RedisThemeController')->getThemeStateClass() }} overflow-hidden">

    @yield('content')

    @include('layouts.footer')
    @stack('pages.public.scripts')
</body>

</html>
