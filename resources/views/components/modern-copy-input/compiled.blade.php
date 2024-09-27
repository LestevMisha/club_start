{{-- Add Blade element --}}
@include('components.modern-copy-input.element', ['class' => $class, 'value' => $value, 'attribute' => $attribute, 'inscription' => $inscription])

{{-- Add JS element --}}
@pushOnce('scripts')
    <script src="{{ Vite::asset('resources/views/components/modern-copy-input/element.js') }}"></script>
@endPushOnce
