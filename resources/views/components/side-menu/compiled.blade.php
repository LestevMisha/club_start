@php
    $route = request()->route()->getName();
@endphp

{{-- Add Blade element --}}
@include('components.side-menu.element')

{{-- Add JS element --}}
@pushOnce('components.scripts')
    <script src="{{ Vite::asset('resources/views/components/side-menu/element.mjs') }}" type="module"></script>
@endPushOnce