<modern-field class="modern-family {{ $class }}" data-uid="{{ $uid }}" data-attribute="{{ $attribute }}" data-message="{{ __('Copied') }}" class="flex w100">
    <label class="input-container">
        <input class="input-field" id="js-{{ $attribute }}-input" value="{{ $value }}" readonly>
        <div class="input-grad"></div>
        <span class="input-label emphasize {{ $color }}">{{ $inscription }}</span>
    </label>
</modern-field>
