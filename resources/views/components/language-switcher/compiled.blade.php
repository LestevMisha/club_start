{{-- blade --}}
@include('components.language-switcher.element', ["uid" => $uid])

@once
    {{-- styles --}}
    @push('components.styles')
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/theme-switcher/element.css') }}">
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/language-switcher/element.css') }}">
    @endpush
@endOnce
