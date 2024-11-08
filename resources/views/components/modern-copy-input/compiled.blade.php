{{-- blade --}}
@include('components.modern-copy-input.element', [
    'uid' => $uid,
    'attribute' => $attribute,
    'inscription' => $inscription,
    'value' => $value,
    'class' => $class ?? '',
    'color' => $color ?? 'blue',
])

@once
    {{-- styles --}}
    @push('components.styles')
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/modern-copy-input/element.css') }}">
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/modern-input/element.css') }}">
    @endPush

    {{-- javascript --}}
    @push('components.scripts')
        <script src="{{ Vite::asset('resources/views/components/modern-copy-input/element.mjs') }}" type="module"></script>
    @endPush
@endonce
