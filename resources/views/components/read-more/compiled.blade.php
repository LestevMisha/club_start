{{-- blade --}}
@include('components.read-more.element')

@once
    {{-- javascript --}}
    @push('components.scripts')
        <script src="{{ Vite::asset('resources/views/components/read-more/element.mjs') }}" type="module"></script>
    @endPush
@endonce
