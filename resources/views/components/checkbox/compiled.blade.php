@php
    $isChecked = Illuminate\Support\Facades\Cookie::get("remember_me", $checked) === "true";
@endphp

{{-- blade --}}
@include('components.checkbox.element')

@once
    {{-- styles --}}
    @push('components.styles')
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/checkbox/element.css') }}">
    @endpush

    {{-- javascript --}}
    @push('components.scripts')
        <script src="{{ Vite::asset('resources/views/components/checkbox/element.mjs') }}" type="module"></script>
    @endPush

@endonce
