@extends('layouts.public')
@section('content')
    <main class="main">
        <x-header.compiled :uid="uniqid()" />
        @yield('sub-content')
    </main>
@endsection
