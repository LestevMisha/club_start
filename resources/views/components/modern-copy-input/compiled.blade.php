{{-- Add Blade element --}}
@include('components.modern-copy-input.element', ['class' => $class ?? '', 'color' => $color ?? 'blue', 'value' => $value, 'attribute' => $attribute, 'inscription' => $inscription])

{{-- Add JS element --}}
@pushOnce('components.scripts')
    <script src="{{ Vite::asset('resources/views/components/modern-copy-input/element.mjs') }}" type="module"></script>
@endPushOnce

{{-- Add CSS element --}}
@pushOnce('components.styles')
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/modern-copy-input/element.css') }}">
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/modern-input/element.css') }}">
@endPushOnce
