<logout-button class="relative" data-uid="{{ $uid }}" data-attribute="{{ $attribute }}" data-message="{{ __('components/logout-button.1') }}">
    <x-modern-loader.compiled :$uid :$attribute size="1.35rem" borderRadius="0.5rem" />
    <form class="flex v">
        @csrf
        <button type="submit">
            @svg('exit', 'item-icon')
        </button>
    </form>
</logout-button>
