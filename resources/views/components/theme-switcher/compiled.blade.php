{{-- php prerequisites --}}
@php
    $rtc = app('App\Http\Controllers\Redis\RedisThemeController');
    $isLightTheme = $rtc->getThemeState();

    // theme states
    $moonState = $isLightTheme ? 'icon-inactive' : '';
    $sunState = $isLightTheme ? '' : 'icon-inactive';
@endphp

{{-- blade --}}
@include('components.theme-switcher.element', ['uid' => $uid, 'attribute' => $attribute])

@once
    {{-- styles --}}
    @push('components.styles')
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/theme-switcher/element.css') }}">
    @endpush

    {{-- javascript --}}
    @push('components.scripts')
        <script src="{{ Vite::asset('resources/views/components/theme-switcher/element.mjs') }}" type="module"></script>
    @endPush

@endOnce
