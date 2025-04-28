@extends('sub-layouts.public')
@section('sub-content')

    {{-- prerequisites --}}
    @php
        $registerLink = app(\App\Services\TelegramServices::class)->getRegisterLink();
    @endphp

    {{-- blade --}}
    @include('pages.public.index.page')
    @once
        {{-- preload --}}
        @push('pages.public.preload')
            <link rel="preload" fetchpriority="high" as="image" type="image/png" href="{{ URL::asset('assets/images/min-png/sneaker-in-motion.png') }}" />
            <link rel="preload" fetchpriority="high" as="image" type="image/png" href="{{ URL::asset('assets/images/min-png/shipping-box.png') }}" />
            <link rel="preload" fetchpriority="high" as="image" type="image/png" href="{{ URL::asset('assets/images/min-png/shipping-box-cut.png') }}" />
            <link rel="preload" fetchpriority="high" as="image" type="image/png" href="{{ URL::asset('assets/images/min-png/hand.png') }}" />
        @endpush

        {{-- styles --}}
        @push('pages.public.styles')
            <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/pages/public/index/styles/swiper.css') }}">
        @endpush

        {{-- javascript --}}
        @push('pages.public.scripts')
            <script src="{{ Vite::asset('resources/views/pages/public/index/scripts/accordion.js') }}"></script>
            <script src="{{ Vite::asset('resources/views/pages/public/index/scripts/hooks.js') }}"></script>
            <script src="{{ Vite::asset('resources/views/pages/public/index/scripts/telegram-circle-video.js') }}"></script>
            <script src="{{ Vite::asset('resources/views/pages/public/index/scripts/modals.js') }}"></script>
            {{-- modules --}}
            <script src="{{ Vite::asset('resources/views/pages/public/index/scripts/modules/sneaker.js') }}" type="module"></script>
            <script src="{{ Vite::asset('resources/views/pages/public/index/scripts/modules/swiper.js') }}" type="module"></script>
        @endpush
    @endonce
@endsection
