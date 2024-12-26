<xread-more {{ $attributes->merge(['class' => 'component']) }} data-uid="{{ $uid }}" data-js-initialized="false" data-show-char="{{ $charsToShow ?? 35 }}"
    data-ellipses-text="{{ $ellipsisText ?? '...' }}" data-read-more="{{ __('components/read-more.1') }}" data-read-less="{{ __('components/read-more.2') }}">
    {{ $slot }}
</xread-more>
