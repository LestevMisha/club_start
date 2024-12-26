<xsubmit-button {{ $attributes->merge(['class' => 'component']) }} data-uid="{{ $uid }}">
    <button id="js-submit-button" type="submit"
        class="group/button relative flex h-16 w-full cursor-pointer items-center justify-center rounded-lg bg-[#0d6efde6] text-base text-white [transition:all_0.225s_ease-in-out] hover:scale-[1.025] hover:bg-[#0d6efd]">
        {{ $inscription }}
        @svg($iconName, 'w-4 h-4 ml-1 text-white group-hover/button:ml-2')
    </button>
</xsubmit-button>
