<xcopy-input class="component" data-js-initialized="false" data-uid="{{ $uid }}" data-attribute="{{ $attribute }}" data-message="{{ __('Copied') }}">
    <input class="input js-input" id="js-{{ $attribute }}-input" value="{{ $value }}" readonly>
    <span class="label emphasize {{ $color }} js-label">{{ $inscription }}</span>
    <button id="js-{{ $attribute }}-button" class="button js-button" type="button">
        @svg('copy', 'icon icon_grey icon_2rem icon_p6 icon_radius-0.5rem icon_hover-v1')
    </button>
</xcopy-input>
