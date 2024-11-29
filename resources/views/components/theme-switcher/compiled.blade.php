{{-- php prerequisites --}}
@php
    $rtc = app('App\Http\Controllers\Redis\RedisThemeController');
    $isLightTheme = $rtc->getThemeState();

    // theme states
    $moonState = $isLightTheme ? 'hidden' : '';
    $sunState = $isLightTheme ? '' : 'hidden';
@endphp

{{-- blade --}}
@include('components.theme-switcher.element', ['uid' => $uid, 'attribute' => $attribute])

@once
    {{-- javascript --}}
    @push('components.scripts')
        <script src="{{ Vite::asset('resources/views/components/theme-switcher/element.mjs') }}" type="module"></script>
    @endPush

@endOnce
