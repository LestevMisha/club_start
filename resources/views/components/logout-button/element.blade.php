<xlogout-button {{ $attributes->merge(['class' => 'component']) }} data-uid="{{ $uid }}" data-js-initialized="false" data-attribute="{{ $attribute }}"
    data-message="{{ __('components/logout-button.1') }}">
    <x-loader.compiled :$uid :$attribute size="1.35rem" borderRadius="0.5rem" />
    <form class="flex flex-col">
        @csrf
        <button type="submit" class="cursor-pointer">
            @svg('logout', 'icon_2.5rem icon_grey icon_p7 icon_radius-0.5rem icon_hover-v2')
        </button>
    </form>
</xlogout-button>
