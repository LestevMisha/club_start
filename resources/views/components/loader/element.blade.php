<xloader {{ $attributes->merge(['class' => 'component loader cursor-not-allowed']) }} id="js-{{ $attribute }}-loader" style="border-radius: {{ $borderRadius ?? 0 }};" data-uid="{{ $uid }}"
    data-attribute="{{ $attribute }}">
    <div class="spinner-container" style="width: {{ $size ?? '2.5rem' }};">
        <svg class="spinner" viewBox="25 25 50 50">
            <circle class="spinner-outlet" cx="50" cy="50" r="25" fill="none" stroke-width="2.5" stroke-miterlimit="10" />
        </svg>
    </div>
</xloader>
