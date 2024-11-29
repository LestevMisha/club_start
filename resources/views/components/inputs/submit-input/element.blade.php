<xsubmit-input class="component js-validation" data-uid="{{ $uid }}" data-js-initialized="false" data-attribute="{{ $attribute }}">
    <input id="js-{{ $attribute }}-input" class="input js-input" autocomplete="{{ $attribute }}" autocorrect="off" autocapitalize="off" spellcheck="false" inputmode="{{ $attribute }}"
        name="{{ $attribute }}" placeholder="" value="{{ $value }}" required {{ $inputAttrs }}>
    <span id="js-{{ $attribute }}-label" class="label js-label">
        {{ $inscription }}
    </span>
    <div class="button">
        <x-loader.compiled :$uid :$attribute size="1.35rem" borderRadius="0.5rem" />
        <button id="js-{{ $attribute }}-button" class="js-button" type="submit">
            @svg('arrow-forward', 'icon_2rem icon_grey icon_p6 icon_radius-0.5rem icon_hover-v1')
        </button>
    </div>
    <div id="js-{{ $attribute }}-error-label" class="error-label js-error-label"></div>
</xsubmit-input>
