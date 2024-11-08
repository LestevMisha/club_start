{{-- php prerequisites --}}
@php
    $route = request()->route()->getName();
@endphp

{{-- blade --}}
@include('components.side-menu.element', ['uid' => $uid, 'attribute' => $attribute])

@once
    {{-- javascript --}}
    @push('components.scripts')
        <script src="{{ Vite::asset('resources/views/components/side-menu/element.mjs') }}" type="module"></script>
    @endPush
@endonce
