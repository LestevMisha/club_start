@php
    $checked = session()->get('checked', false);
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'КЛУБ START' }}</title>

    <!-- +++++++++++ PROJECT CSS +++++++++++ -->
    <!-- Prefetch the LCP image with a high fetchpriority so it starts loading with the stylesheet. -->
    <link rel="prefetch" fetchpriority="high" as="image" href="{{ URL::asset('images/min-png/sneakers-chair-1.png') }}"
        type="image/png" />

    <link href="{{ secure_asset('styles/main.css') }}" type="text/css" rel="stylesheet">
    <link defer href="{{ secure_asset('styles/light-mode.css') }}" type="text/css" rel="stylesheet">

    @yield('main-index-styles')
</head>

<body>

    <div class="flex h w100 h100">
        <livewire:light-mode-on menu_type="side" />
        {{ $slot }}
    </div>

    <!-- +++++++++++ CDNs +++++++++++ -->
    {{-- jQuery/Mask jQuery --}}
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <!-- Fix jQuery [Violation] non-passive event (support https://github.com/ignasdamunskis/passive-events-support) -->
    <script>
        window.passiveSupport = {
            events: ['touchstart', 'touchmove']
        }
    </script>
    <script type="module" src="{{ URL::asset('javascript/passive-events-support/dist/main.js') }}"></script>


    <!-- +++++++++++ PROJECT JAVASCRIPT +++++++++++ -->
    <script src="{{ secure_asset('javascript/light-mode.js') }}"></script>
    {{-- custom modern --}}
    <script src="{{ secure_asset('javascript/modern.js') }}"></script>

    @yield('main-index-script');
    @yield('card-credentials-script');
</body>

</html>
