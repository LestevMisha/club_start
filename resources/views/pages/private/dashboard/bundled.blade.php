@extends('sub-layouts.private')
@section('sub-content')
    {{-- blade --}}
    @include('pages.private.dashboard.page')
    @once
        {{-- styles --}}
        @push('pages.private.styles')
            <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/pages/private/dashboard/page.css') }}">
        @endpush

        {{-- javascript --}}
        @push('pages.private.scripts')
            <script src="{{ Vite::asset('resources/views/pages/private/dashboard/page.mjs') }}" type="module"></script>
        @endPush
    @endonce
@endsection
