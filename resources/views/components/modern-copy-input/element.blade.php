<modern-copy-input data-attribute="{{ $attribute }}" class="flex w100">
    <label class="modern-copy-input-wrapper">
        <input class="modern-copy-input" id="js-{{ $attribute }}-input" value="{{ $value }}" readonly>
        <span class="modern-copy-input-label emphasize orange {{ $class ?? '' }}">{{ $inscription }}</span>
        @svg('copy', ['class' => 'default-icon copy-icon', 'id' => "js-$attribute-button"])
    </label>
</modern-copy-input>
