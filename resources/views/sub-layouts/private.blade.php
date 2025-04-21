@extends('layouts.private')
@section('content')
    <x-side-menu.compiled :uid="uniqid()" attribute="side-menu" />
    <div class="ml-[4.5rem] sm:p-4">
        @yield('sub-content')
    </div>
@endsection
