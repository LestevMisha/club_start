{{-- blade --}}
@include('components.countdown-circle.element', ['uid' => $uid, 'seconds' => $seconds ?? 10, 'size' => $size ?? '2rem', 'loop' => $loop ?? false, 'messageRemoval' => $messageRemoval ?? false])

@once
    {{-- styles --}}
    @push('components.styles')
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/countdown-circle/element.css') }}">
    @endPush

    {{-- scripts --}}
    @push('components.scripts')
        <script src="{{ Vite::asset('resources/views/components/countdown-circle/element.mjs') }}" type="module"></script>
    @endpush
@endonce
