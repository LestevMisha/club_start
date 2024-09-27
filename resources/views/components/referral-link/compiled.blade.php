{{-- Add Blade element --}}
@include('components.referral-link.element')

{{-- Add JS element --}}
@pushOnce('scripts')
    <script src="{{ Vite::asset('resources/views/components/referral-link/element.js') }}"></script>
@endPushOnce
