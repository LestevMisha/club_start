<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ $title ?? 'КЛУБ START' }}</title>
    {{-- styles --}}
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/styles/global/user-panel.css') }}">
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/styles/global/main.css') }}">
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/styles/global/light-mode.css') }}">
    {{-- global script --}}
    <script src="{{ Vite::asset('resources/javascript/laravel/requests.js') }}"></script>
    <script src="{{ Vite::asset('resources/javascript/laravel/helpers.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.google.recaptcha.site_key') }}"></script>
    <style>
        .grecaptcha-badge {
            visibility: hidden !important;
        }
    </style>
    @stack('components.styles')
</head>

<body class="{{ app('App\Http\Controllers\Redis\RedisThemeController')->getThemeStateClass() }}">

    <main class="main">
        <x-side-menu.compiled />
        <div class="side-menu-wrapper {{ request()->route()->getName() === 'private.dashboard' ? 'folded' : '' }}">
            @yield('content')
        </div>
    </main>


    <div id="modal" class="b-modal">
        <div class="flex h gap_05 align justify">
            @svg('check-circle', 'default-icon b-img b-img_v1')
            <div class="b-text">{{ __('Copied') }}</div>
        </div>
    </div>

    @yield('dashboard-script')
    @yield('card-credentials-script')
    
    @stack('scripts')
</body>

</html>
