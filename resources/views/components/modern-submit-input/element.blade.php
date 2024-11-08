<modern-submit-button class="modern-family" data-uid="{{ $uid }}" data-js-initialized="false" data-attribute="{{ $attribute }}">
    <label class="input-container {{ $class ?? '' }}">
        <input id="js-{{ $attribute }}-input" class="input-field js-input-field" autocomplete="{{ $attribute }}" autocorrect="off" autocapitalize="off" spellcheck="false"
            inputmode="{{ $attribute }}" name="{{ $attribute }}" placeholder="" value="{{ $value }}" required>
        <span id="js-{{ $attribute }}-label" class="input-label js-input-label">
            {{ $inscription }}
        </span>
        <div class="input-button">
            <x-modern-loader.compiled :uid="$uid" :attribute="$attribute" size="1.35rem" borderRadius="0.5rem" />
            <button id="js-{{ $attribute }}-button" type="submit">
                @svg('right-arrow', 'input-icon')
            </button>
        </div>
    </label>
    <div class="error-label js-error-label" id="js-{{ $attribute }}-error-label"></div>
</modern-submit-button>
