@extends('sub-layouts.private')
@section('sub-content')
    {{-- blade --}}
    @include('pages.private.profile.page')
    @once
        {{-- javascript --}}
        @push('pages.private.scripts')
            <script src="{{ Vite::asset('resources/views/pages/private/profile/page.mjs') }}" type="module"></script>
        @endPush
    @endonce
@endsection
