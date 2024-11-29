{{-- blade --}}
@include('components.field.element', ["uid" => $uid, 'attribute' => $attribute, 'inscription' => $inscription, 'value' => $value, 'class' => $class ?? '', 'color' => $color ?? 'blue'])

@once
    {{-- styles --}}
    @push('components.styles')
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/inputs/copy-input/element.css') }}">
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/inputs/input/element.css') }}">
    @endPush
@endonce
