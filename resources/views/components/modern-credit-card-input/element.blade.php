<modern-credit-card-input class="modern-family" data-uid="{{ $uid }}" data-attribute="{{ $attribute }}">
    <label class="input-container {{ $class ?? '' }}">
        <input id="js-{{ $attribute }}-input" class="input-field" maxlength="19" minlength="19" autocomplete="{{ $attribute }}" autocorrect="off" autocapitalize="off" spellcheck="false"
            inputmode="{{ $attribute }}" name="{{ $attribute }}" placeholder="" value="{{ $value ?? old($attribute) }}" required>
        <span id="js-{{ $attribute }}-label" class="input-label">
            {{ $inscription }}
            <span class="input-label-fraction" id="js-{{ $attribute }}-amount">0/16</span>
        </span>
        <div class="input-button">
            <x-modern-loader.compiled :uid="$uid" :attribute="$attribute" size="2rem" borderRadius="0.5rem" />
            <button id="js-{{ $attribute }}-button" type="submit" {{ $value ? '' : 'disabled' }}>
                @svg('right-arrow', 'input-icon')
            </button>
        </div>
    </label>
    <div id="js-{{ $attribute }}-error-label"></div>
</modern-credit-card-input>
