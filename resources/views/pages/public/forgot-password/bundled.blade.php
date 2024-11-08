@extends('layouts.public')
@section('content')
    {{-- blade --}}
    @include('pages.public.forgot-password.page')
    @once
        {{-- styles --}}
        @push('pages.public.styles')
            <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/pages/public/forgot-password/page.css') }}">
        @endpush

        {{-- javascript --}}
        @push('pages.public.scripts')
            <script src="{{ Vite::asset('resources/views/pages/public/forgot-password/page.mjs') }}" type="module"></script>
        @endPush
    @endonce
@endsection
