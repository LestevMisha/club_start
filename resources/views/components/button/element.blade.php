<xbutton class="component group cursor-pointer" data-uid="{{ $uid }}" @if ($attribute) data-attribute="{{ $attribute }}" @endif>
    @if ($url)
        <a target="_blank" href="{{ $url }}"
            class="relative flex h-16 w-full min-w-[10em] flex-row items-center justify-between gap-4 rounded-lg bg-[#ecf1f7] px-[1em] font-medium text-black [transition:all_.225s_ease-in-out] hover:bg-[#8080801a] dark:bg-[#80808026] dark:text-white dark:hover:text-[#ffffff80]">
            {{ $title }}
            @svg('arrow-forward', 'icon_grey icon_2rem icon_p6 icon_radius-0.5rem group-hover:!scale-105 group-hover:!text-white group-hover:!bg-[#0d6efd]')
        </a>
    @else
        <div
            class="relative flex h-16 w-full min-w-[10em] flex-row items-center justify-between gap-4 rounded-lg bg-[#ecf1f7] px-[1em] font-medium text-black [transition:all_.225s_ease-in-out] hover:bg-[#8080801a] dark:bg-[#80808026] dark:text-white dark:hover:text-[#ffffff80]">
            {{ $title }}
            <div class="button">
                <x-loader.compiled :$uid :$attribute size="1.35rem" borderRadius="0.5rem" />
                @svg('arrow-forward', 'icon_grey icon_2rem icon_p6 icon_radius-0.5rem group-hover:!scale-105 group-hover:!text-white group-hover:!bg-[#0d6efd]')
            </div>
        </div>
    @endif
</xbutton>
