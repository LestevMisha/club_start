<color-scheme-switcher id="lightModeSwitcher" mode="horizontal">

    <div class="flex h100 w100 h space-btw align">
        <x-svg class="b-img b-img_sun" svg="Sun" />
        <x-svg class="b-img b-img_moon" svg="Moon" />
    </div>

    <input wire:click="switch" id="themeSwitcher" type="checkbox" {{ $checkedTheme ? 'checked' : '' }}>
    <div class="toggle-circle"></div>

    {{-- Theme switcher logic --}}
    <script>
        var setThemeMode = () => {
            document.body.className = document.getElementById('themeSwitcher').checked ? 'lightMode' :
                'darkMode';
        };
        document.getElementById('themeSwitcher').addEventListener('change', setThemeMode);
        setThemeMode();
    </script>
</color-scheme-switcher>
