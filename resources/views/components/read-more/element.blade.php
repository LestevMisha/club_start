<xread-more {{ $attributes->merge(['class' => 'component hidden!']) }} data-uid="{{ $uid }}" data-js-initialized="false" data-show-char="{{ $charsToShow ?? 75 }}" data-leftover-limit="{{ $leftoverLimit ?? 25 }}" data-ellipses-text="{{ $ellipsisText ?? '...' }}" data-read-more="{{ __('components/read-more.1') }}" data-read-less="{{ __('components/read-more.2') }}">
    {{ $slot }}
</xread-more>
