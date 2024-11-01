{{-- blade --}}
@include('components.card-credentials-form.element', ['uid' => $uid])

@once
    {{-- javascript --}}
    @push('components.scripts')
        <script src="{{ Vite::asset('resources/views/components/card-credentials-form/element.mjs') }}" type="module"></script>
    @endPush
@endonce
