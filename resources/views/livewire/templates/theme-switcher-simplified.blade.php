<color-simple-scheme-switcher>
    @if ($checkedTheme)
        <x-svg class="b-img b-img_sun" svg="Sun" />
    @else
        <x-svg class="b-img b-img_moon" svg="Moon" />
    @endif
    <input wire:click="switch" id="themeSwitcherSimplified" type="checkbox" {{ $checkedTheme ? 'checked' : '' }}>

    {{-- Theme switcher logic --}}
    <script>
        var setThemeMode = () => {
            document.body.className = document.getElementById('themeSwitcherSimplified').checked ? 'lightMode' : 'darkMode';
        };
        document.getElementById('themeSwitcherSimplified').addEventListener('change', setThemeMode);
        setThemeMode();
    </script>
</color-simple-scheme-switcher>
