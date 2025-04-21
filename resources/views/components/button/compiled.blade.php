{{-- php prerequisites --}}
@php
    $svgClass = 'icon_grey icon_2rem icon_p6 icon_radius-0.5rem group-hover:scale-105! group-hover:text-white! group-hover:bg-[#0d6efd]!' . ' ' . ($svgClass ?? '');
@endphp

{{-- blade --}}
@include('components.button.element')
