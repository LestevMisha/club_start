{{-- blade --}}
@include('components.loader.element', ['uid' => $uid, 'attribute' => $attribute, 'size' => $size ?? "2.5rem", 'borderRadius' => $borderRadius ?? "0"])

@once
    {{-- styles --}}
    @push('components.styles')
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/loader/element.css') }}">
    @endpush
@endOnce