<xcredit-card-input {{ $attributes->merge(['class' => 'component js-validation relative w-full']) }} data-uid="{{ $uid }}" data-js-initialized="false" data-attribute="{{ $attribute }}">
    <input id="js-{{ $attribute }}-input" class="input js-input" maxlength="19" minlength="19" autocomplete="{{ $attribute }}" autocorrect="off" autocapitalize="off" spellcheck="false"
        inputmode="{{ $attribute }}" name="{{ $attribute }}" placeholder="" value="{{ $value ?? old($attribute) }}" required>
    <span id="js-{{ $attribute }}-label" class="label js-label">
        {{ $inscription }}
        <span id="js-{{ $attribute }}-amount" class="label-fraction js-label-fraction">0/16</span>
    </span>
    <div class="button">
        <x-loader.compiled :$uid :$attribute size="1.35rem" borderRadius="0.5rem" />
        <button id="js-{{ $attribute }}-button" class="js-button" type="submit" {{ isset($value) ? '' : 'disabled' }}>
            @svg('arrow-forward', 'icon_2rem icon_grey icon_p6 icon_radius-0.5rem')
        </button>
    </div>
    <div id="js-{{ $attribute }}-error-label" class="error-label js-error-label"></div>
</xcredit-card-input>
