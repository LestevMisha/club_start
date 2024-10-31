@extends('layouts.private')
@section('content')
    <main>
        <x-dashboard-header.compiled />
        <x-side-menu.compiled />
        <div class="main-wrapper">
            @yield('sub-content')
        </div>
    </main>
@endsection
