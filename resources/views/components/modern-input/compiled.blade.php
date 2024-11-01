{{-- blade --}}
@include('components.modern-input.element', ['uid' => $uid, 'attribute' => $attribute, 'inscription' => $inscription, 'class' => $class ?? '', 'value' => $value ?? ''])

@once
    {{-- javascript --}}
    @push('components.scripts')
        <script src="{{ Vite::asset('resources/views/components/modern-input/element.mjs') }}" type="module"></script>
    @endPush

    {{-- styles --}}
    @push('components.styles')
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/modern-input/element.css') }}">
    @endPush
@endonce
