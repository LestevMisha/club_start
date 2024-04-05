@persist('color-scheme-switcher')
    <color-scheme-switcher id="lightModeSwitcher" mode="horizontal">
        <div class="flex h100 w100 h space-btw align">
            <x-svg class="b-img b-img_sun" svg="Sun" />
            <x-svg class="b-img b-img_moon" svg="Moon" />
        </div>
        <input id="themeSwitcher" type="checkbox" {{ request()->cookie('checked') ? 'checked' : '' }}>
        <div class="toggle-circle"></div>
    </color-scheme-switcher>
@endpersist
