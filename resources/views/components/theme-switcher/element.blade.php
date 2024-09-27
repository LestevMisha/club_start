<theme-switcher class="switcher">

    @svg('sun', "b-img b-img_sun $sunState", ['id' => 'js-sun'])
    @svg('moon', "b-img b-img_moon $moonState", ['id' => 'js-moon'])

    <input id="js-theme-switcher" type="checkbox" {{ $isLightTheme ? 'checked' : '' }}>
</theme-switcher>