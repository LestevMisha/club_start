{{-- blade --}}
@include('components.message.element')

@once
    {{-- javascript --}}
    @push('components.scripts')
        <script src="{{ Vite::asset('resources/views/components/message/element.mjs') }}" type="module"></script>
    @endpush
@endonce
