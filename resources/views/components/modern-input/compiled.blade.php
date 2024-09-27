{{-- Add Blade element --}}
@include('components.modern-input.element', ['class' => $class ?? '', 'attribute' => $attribute ?? '', 'inscription' => $inscription ?? '', 'value' => $value ?? ''])

{{-- Add CSS element --}}
@pushOnce('components.styles')
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/modern-input/element.css') }}">
@endPushOnce