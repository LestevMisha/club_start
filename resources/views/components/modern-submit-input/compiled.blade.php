{{-- blade --}}
@include('components.modern-submit-input.element', [
    'uid' => $uid,
    'inscription' => $inscription,
    'attribute' => $attribute,
    'class' => $class ?? null,
    'value' => $value ?? null,
    'inputAttrs' => $inputAttrs ?? null,
])

@once
    {{-- styles --}}
    @push('components.styles')
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/modern-submit-input/element.css') }}">
    @endpush
@endonce
