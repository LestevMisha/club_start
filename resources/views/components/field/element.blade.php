<xfield {{ $attributes->merge(['class' => 'component relative w-full']) }} data-uid="{{ $uid }}" data-attribute="{{ $attribute }}" data-message="{{ __('Copied') }}" class="w100 flex">
    <input id="js-{{ $attribute }}-input" class="input js-input" value="{{ $value }}" readonly>
    <span class="label emphasize {{ $color ?? 'blue' }} js-label">{{ $inscription }}</span>
</xfield>
