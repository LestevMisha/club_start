<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'КЛУБ START' }}</title>
    {{-- preload --}}
    @yield('main-index-preload')
    {{-- styles --}}
    <link fetchpriority="low" href="{{ secure_asset('styles/main.css') }}" type="text/css" rel="stylesheet">
    <link fetchpriority="low" href="{{ secure_asset('styles/light-mode.css') }}" type="text/css" rel="stylesheet">
    @yield('main-index-styles')
</head>

<body>

    <main class="main">
        <livewire:templates.header />
        {{ $slot }}
    </main>

    {{-- javascript --}}
    <script defer src="{{ URL::asset('javascript/main.js') }}"></script>
    @yield('main-index-script')
    @yield('forgot-password-script')
    @yield('card-credentials-script')
    @yield('reCAPTCHA-script')
</body>

</html>
