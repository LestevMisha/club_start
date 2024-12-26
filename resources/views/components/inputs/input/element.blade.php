<xinput {{ $attributes->merge(['class' => 'component js-validation relative w-full']) }} data-uid="{{ $uid }}" data-js-initialized="false" data-attribute="{{ $attribute }}">
    <input id="js-{{ $attribute }}-input" class="input js-input" type="text" autocomplete="{{ $attribute }}" autocorrect="off" autocapitalize="off" spellcheck="false" inputmode="{{ $attribute }}"
        name="{{ $attribute }}" placeholder="" value="{{ $value ?? old($attribute) }}" required>
    <span id="js-{{ $attribute }}-label" class="label js-label">{{ $inscription }}</span>
    <button id="js-{{ $attribute }}-button" class="button js-button" type="button">
        @svg('close', 'icon_2rem icon_grey icon_p6 icon_radius-0.5rem icon_hover-v2')
    </button>
    <div id="js-{{ $attribute }}-error-label" class="error-label js-error-label"></div>
</xinput>
