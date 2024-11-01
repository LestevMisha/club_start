<theme-switcher data-uid="{{ $uid }}" data-attribute="{{ $attribute }}">
    <x-modern-loader.compiled :uid="$uid" :attribute="$attribute" size="2.5rem" borderRadius="2.5rem" />
    <div class="switcher">
        @svg('sun', "b-img b-img_sun $sunState", ['id' => "js-$attribute-sun"])
        @svg('moon', "b-img b-img_moon $moonState", ['id' => "js-$attribute-moon"])
        <input id="js-{{ $attribute }}-input" type="checkbox" {{ $isLightTheme ? 'checked' : '' }}>
    </div>
</theme-switcher>
