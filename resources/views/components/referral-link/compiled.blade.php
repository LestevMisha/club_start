{{-- Add Blade element --}}
@include('components.referral-link.element')

{{-- Add JS element --}}
@pushOnce('components.scripts')
    <script src="{{ Vite::asset('resources/views/components/referral-link/element.mjs') }}" type="module"></script>
@endPushOnce
