{{-- blade --}}
@include('components.modern-submit-button.element', ['uid' => $uid, 'inscription' => $inscription, 'iconName' => $iconName, 'class' => $class ?? null])

@once
    {{-- styles --}}
    @push('components.styles')
        <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/views/components/modern-submit-button/element.css') }}">
    @endpush
@endonce
