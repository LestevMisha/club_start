<modern-input class="modern-family" data-uid="{{ $uid }}" data-js-initialized="false" data-attribute="{{ $attribute }}">
    <label class="input-container {{ $class ?? '' }}">
        <input id="js-{{ $attribute }}-input" class="input-field js-input-field" type="text" autocomplete="{{ $attribute }}" autocorrect="off" autocapitalize="off" spellcheck="false"
            inputmode="{{ $attribute }}" name="{{ $attribute }}" placeholder="" value="{{ $value ?? old($attribute) }}" required>
        <span id="js-{{ $attribute }}-label" class="input-label js-input-label">{{ $inscription }}</span>
        <button id="js-{{ $attribute }}-button" class="input-button" type="button">
            @svg('cross', 'input-icon input-icon-default')
        </button>
    </label>
    <div class="error-label js-error-label" id="js-{{ $attribute }}-error-label"></div>
</modern-input>
