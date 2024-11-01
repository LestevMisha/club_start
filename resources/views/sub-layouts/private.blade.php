@extends('layouts.private')
@section('content')
    <main>
        <x-dashboard-header.compiled :uid="uniqid()" />
        <x-side-menu.compiled :uid="uniqid()" attribute="side-menu" />
        <div class="main-wrapper">
            @yield('sub-content')
        </div>
    </main>
@endsection
