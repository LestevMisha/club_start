{{-- php prerequisites --}}
@php
    $currentRoute = Route::current()?->getName();
    $telegramId = auth()->user()?->telegram_id;
@endphp

{{-- blade --}}
@include('components.tools-stack.element')
