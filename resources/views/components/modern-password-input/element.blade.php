<modern-password-input class="modern-family" data-attribute="{{ $attribute }}" data-name="{{ $name }}">
    <label class="input-container {{ isset($class) ? $class : '' }}">
        <input id="js-{{ $attribute }}-input" class="input-field" type="{{ $isPasswordVisible ? 'text' : 'password' }}" autocomplete="{{ $attribute }}" autocorrect="off" autocapitalize="off"
            spellcheck="false" inputmode="{{ $attribute }}" name="{{ $attribute }}" placeholder="" required>
        <span id="js-{{ $attribute }}-label" class="input-label">{{ $inscription }}</span>
        <button id="{{ $name }}" class="input-button" type="button">
            @svg('eye', "input-icon input-icon-default input-icon-eye $state", ['id' => "js-$attribute-eye"])
            @svg('closed-eye', "input-icon input-icon-default input-icon-eye $reverseState", ['id' => "js-$attribute-closed-eye"])
        </button>
    </label>
    <div id="js-{{ $attribute }}-error-label"></div>
</modern-password-input>
