{{-- blade --}}
@include('components.inputs.credit-card-input.element', ['uid' => $uid, 'class' => $class ?? '', 'value' => $value ?? '', 'inscription' => $inscription])

@once
    {{-- styles --}}
    @push('components.styles')
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/inputs/input/element.css') }}">
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/inputs/credit-card-input/element.css') }}">
    @endPush

    {{-- javascript --}}
    @push('components.scripts')
        <script src="{{ Vite::asset('resources/views/components/inputs/credit-card-input/element.mjs') }}" type="module"></script>
    @endPush
@endonce
