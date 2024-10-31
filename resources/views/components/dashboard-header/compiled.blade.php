{{-- Add Blade element --}}
@include('components.dashboard-header.element')

{{-- Add CSS element --}}
@pushOnce('components.styles')
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/dashboard-header/element.css') }}">
@endPushOnce
