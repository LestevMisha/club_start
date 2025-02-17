{{-- blade --}}
@include('components.telegram-button.element')

@once
    {{-- styles --}}
    @push('components.styles')
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/telegram-button/element.css') }}">
    @endpush
@endonce
