<xcheckbox {{ $attributes->merge(['class' => 'component flex flex-row items-center gap-2']) }} data-uid="{{ $uid }}" data-js-initialized="false">
    <button class="checkbox cursor-pointer" type="button" role="checkbox" data-state="{{ $isChecked ? 'checked' : 'unchecked' }}" value="true">
        @svg('custom/checkbox-mark', implode(' ', ['absolute block w-full h-full text-white p-[0.2rem]', $isChecked ? 'block' : 'hidden']))

    </button>
    <div class="checkbox-text cursor-pointer text-base leading-none text-[#666666]">{{ $title }}</div>
</xcheckbox>
