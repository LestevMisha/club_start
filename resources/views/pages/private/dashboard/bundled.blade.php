@extends('sub-layouts.private')
@section('sub-content')
    {{-- Add Blade --}}
    @include('pages.private.dashboard.page')
    {{-- Add JS --}}
    @push('pages.private.javascript')
        <script src="{{ Vite::asset('resources/views/pages/private/dashboard/page.mjs') }}" type="module"></script>
    @endPush
@endsection
