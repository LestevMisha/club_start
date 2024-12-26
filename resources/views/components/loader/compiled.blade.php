{{-- blade --}}
@include('components.loader.element')

@once
    {{-- styles --}}
    @push('components.styles')
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/loader/element.css') }}">
    @endpush
@endOnce
