{{-- blade --}}
@include('components.read-more.element', ['uid' => $uid, 'ellipsisText' => $ellipsisText ?? "...", 'charsToShow' => $charsToShow ?? 50])

@once
    {{-- styles --}}
    @push('components.styles')
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/read-more/element.css') }}">
    @endpush
    
    {{-- javascript --}}
    @push('components.scripts')
        <script src="{{ Vite::asset('resources/views/components/read-more/element.mjs') }}" type="module"></script>
    @endPush
@endonce
