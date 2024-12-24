{{-- blade --}}
@include('components.read-more.element', ['uid' => $uid, 'ellipsisText' => $ellipsisText ?? "...", 'charsToShow' => $charsToShow ?? 35])

@once
    {{-- javascript --}}
    @push('components.scripts')
        <script src="{{ Vite::asset('resources/views/components/read-more/element.mjs') }}" type="module"></script>
    @endPush
@endonce
