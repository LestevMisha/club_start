@extends('sub-layouts.private')
@section('sub-content')
    {{-- blade --}}
    @include('pages.private.dashboard.page')
    @once
        {{-- javascript --}}
        @push('pages.private.javascript')
            <script src="{{ Vite::asset('resources/views/pages/private/dashboard/page.mjs') }}" type="module"></script>
        @endPush
    @endonce
@endsection
