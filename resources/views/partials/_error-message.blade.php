<x-message.compiled :uid="uniqid()" seconds="10">
    <x-read-more.compiled :uid="uniqid()">
        <div class="flex h gap_05">
            @svg('exclamation-point', 'exclamation-point-icon')
            <span class="b-text b-text_08 b-text_lh-1 b-text_warning more mt-015">{{ $error }}</span>
        </div>
    </x-read-more.compiled>
</x-message.compiled>

@stack('components.scripts')
@stack('components.styles')
