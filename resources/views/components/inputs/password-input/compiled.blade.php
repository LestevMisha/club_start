{{-- blade --}}
@include('components.inputs.password-input.element', ['uid' => $uid, 'attribute' => $attribute, 'inscription' => $inscription])

@once
    {{-- styles --}}
    @push('components.styles')
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/inputs/input/element.css') }}">
    @endPush

    {{-- javascript --}}
    @push('components.scripts')
        <script src="{{ Vite::asset('resources/views/components/inputs/password-input/element.mjs') }}" type="module"></script>
    @endPush
@endonce
