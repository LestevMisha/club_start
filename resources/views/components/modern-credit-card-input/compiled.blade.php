{{-- Add Blade element --}}
@include('components.modern-credit-card-input.element', ['class' => $class, 'attribute' => $attribute, 'inscription' => $inscription])

{{-- Add JS element --}}
@pushOnce('scripts')
    <script src="{{ Vite::asset('resources/views/components/modern-credit-card-input/element.js') }}"></script>
@endPushOnce

{{-- Add CSS element --}}
@pushOnce('components.styles')
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/modern-input/element.css') }}">
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/modern-credit-card-input/element.css') }}">
@endPushOnce
