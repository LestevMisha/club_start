{{-- php prerequisites --}}
@php
    $isLightTheme = app(\App\Http\Controllers\RedisController::class)->_getThemeState(false);

    // theme states
    $moonState = $isLightTheme ? 'hidden' : '';
    $sunState = $isLightTheme ? '' : 'hidden';
@endphp

{{-- blade --}}
@include('components.theme-switcher.element')

@once
    {{-- javascript --}}
    @push('components.scripts')
        <script src="{{ Vite::asset('resources/views/components/theme-switcher/element.mjs') }}" type="module"></script>
    @endPush

@endOnce
