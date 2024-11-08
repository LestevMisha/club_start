<x-message.compiled :uid="uniqid()" seconds="10">
    <x-read-more.compiled :uid="uniqid()">
        <div class="flex h gap_05">
            @svg('checkcircle', 'checkcircle-icon')
            <span class="b-text b-text_08 b-text_lh-1 b-text_success more mt-015">{{ $dataMessage }}</span>
        </div>
    </x-read-more.compiled>
</x-message.compiled>

@stack('components.scripts')
@stack('components.styles')
