<modern-copy-input class="modern-family {{ $class }}" data-js-initialized="false" data-uid="{{ $uid }}" data-attribute="{{ $attribute }}" data-message="{{ __('Copied') }}" class="flex w100">
    <label class="input-container">
        <input class="input-field" id="js-{{ $attribute }}-input" value="{{ $value }}" readonly>
        <div class="input-grad"></div>
        <span class="input-label emphasize {{ $color }}">{{ $inscription }}</span>
        <button id="js-{{ $attribute }}-button" class="input-button" type="submit">
            @svg('copy', 'input-icon input-icon_copy')
        </button>
    </label>
</modern-copy-input>
