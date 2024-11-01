{{-- blade --}}
@include('components.modern-credit-card-input.element', ['uid' => $uid, 'class' => $class ?? '', 'value' => $value ?? '', 'inscription' => $inscription])

@once
    {{-- javascript --}}
    @push('components.scripts')
        <script src="{{ Vite::asset('resources/views/components/modern-credit-card-input/element.mjs') }}" type="module"></script>
    @endPush

    {{-- styles --}}
    @push('components.styles')
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/modern-input/element.css') }}">
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/modern-credit-card-input/element.css') }}">
    @endPush

@endonce
