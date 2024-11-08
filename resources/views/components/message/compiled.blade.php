{{-- blade --}}
@include('components.message.element', ['uid' => $uid, 'seconds' => $seconds ?? 10])

@once
    {{-- javascript --}}
    @push('components.scripts')
        <script src="{{ Vite::asset('resources/views/components/message/element.mjs') }}" type="module"></script>
    @endpush
@endonce
