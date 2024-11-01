{{-- blade --}}
@include('components.dashboard-header.element', ['uid' => $uid])

@once
    {{-- styles --}}
    @push('components.styles')
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/dashboard-header/element.css') }}">
    @endPush
@endonce
