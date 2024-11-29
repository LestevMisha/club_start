<xpassword-input class="component js-validation" data-uid="{{ $uid }}" data-js-initialized="false" data-attribute="{{ $attribute }}">
    <input id="js-{{ $attribute }}-input" class="input js-input" type="password" autocomplete="{{ $attribute }}" autocorrect="off" autocapitalize="off"
        spellcheck="false" inputmode="{{ $attribute }}" name="{{ $attribute }}" placeholder="" required>
    <span id="js-{{ $attribute }}-label" class="label js-label">{{ $inscription }}</span>
    <button id="js-{{ $attribute }}-button" class="button js-button" type="button">
        @svg('visibility', 'icon icon_2rem icon_grey icon_p6 icon_radius-0.5rem icon_hover-v2 !hidden', ['id' => "js-$attribute-eye"])
        @svg('visibility-off', 'icon icon_2rem icon_grey icon_p6 icon_radius-0.5rem icon_hover-v2', ['id' => "js-$attribute-closed-eye"])
    </button>
    <div id="js-{{ $attribute }}-error-label" class="error-label js-error-label"></div>
</xpassword-input>
