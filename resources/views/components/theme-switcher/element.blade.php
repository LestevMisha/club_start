<xtheme-switcher {{ $attributes->merge(['class' => 'component relative h-fit w-fit']) }} data-uid="{{ $uid }}" data-js-initialized="false" data-attribute="{{ $attribute }}">
    <x-loader.compiled :uid="$uid" :attribute="$attribute" size="2.5rem" borderRadius="2.5rem" />
    <div class="icon icon_2.5rem icon_grey icon_p7 icon_radius-full icon_hover-v2">
        @svg('light-mode', "w-full h-full text-[#fdb70d] $sunState", ['id' => "js-$attribute-sun"])
        @svg('dark-mode', "w-full h-full text-[#0d6efd] $moonState", ['id' => "js-$attribute-moon"])
        <input id="js-{{ $attribute }}-input" type="checkbox" {{ $isLightTheme ? 'checked' : '' }} class="!absolute !left-0 !top-0 !m-0 !h-full !w-full !cursor-pointer !outline-none [all:unset]">
    </div>
</xtheme-switcher>
