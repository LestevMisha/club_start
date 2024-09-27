{{-- Add extra prerequisites --}}
@php
    $rtc = app('App\Http\Controllers\Redis\RedisThemeController');
    $isLightTheme = $rtc->getThemeState();

    // theme states
    $moonState = $isLightTheme ? 'icon-inactive' : '';
    $sunState = $isLightTheme ? '' : 'icon-inactive';
@endphp

{{-- Add Blade element --}}
@include('components.theme-switcher.element')

{{-- Add JS element --}}
@pushOnce('scripts')
    <script src="{{ Vite::asset('resources/views/components/theme-switcher/element.js') }}"></script>
@endPushOnce
