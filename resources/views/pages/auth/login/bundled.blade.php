@extends('layouts.auth')
@section('content')
    {{-- blade --}}
    @include('pages.auth.login.page')
    @once
        {{-- javascript --}}
        @push('pages.auth.scripts')
            <script src="{{ Vite::asset('resources/views/pages/auth/login/page.mjs') }}" type="module"></script>
        @endPush
    @endonce
@endsection
