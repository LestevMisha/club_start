{{-- php prerequisites --}}
@php
    $route = request()->route()->getName();
@endphp

{{-- blade --}}
@include('components.side-menu.element')

@once
    {{-- styles --}}
    @push('components.styles')
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/side-menu/element.css') }}">
    @endpush

    {{-- javascript --}}
    @push('components.scripts')
        <script src="{{ Vite::asset('resources/views/components/side-menu/element.mjs') }}" type="module"></script>
    @endPush

@endonce
