@extends('layouts.private')
@section('content')
    <x-dashboard-header.compiled :uid="uniqid()" />
    <x-side-menu.compiled :uid="uniqid()" attribute="side-menu" />
    <div class="ml-[4.5rem] mt-[4.5rem] max-w-[1440px] p-4">
        @yield('sub-content')
    </div>
@endsection
