<xbutton {{ $attributes->merge(['class' => 'component group cursor-pointer w-full']) }} data-uid="{{ $uid }}" @if ($url ?? '') data-attribute="{{ $attribute ?? '' }}" @endif>
    @if ($url ?? '')
        <a target="{{ $target ?? '_blank' }}" href="{{ $url }}"
            class="relative flex h-16 w-full min-w-[10em] flex-row items-center justify-between gap-4 rounded-lg bg-[#ecf1f7] px-[1em] font-medium text-black [transition:all_.225s_ease-in-out] hover:bg-[#8080801a] dark:bg-[#80808026] dark:text-white dark:hover:text-[#ffffff80]">
            @if (isset($icon))
                <div class="flex flex-row items-center gap-2">
                    @svg($icon, 'icon_2rem')
                    {{ $title }}
                </div>
            @else
                {{ $title }}
            @endif
            @svg('arrow-forward', 'icon_grey icon_2rem icon_p6 icon_radius-0.5rem group-hover:scale-105! group-hover:text-white! group-hover:bg-[#0d6efd]!', ["id" => "arrow-forward"])
        </a>
    @else
        <div
            class="relative flex h-16 w-full min-w-[10em] flex-row items-center justify-between gap-4 rounded-lg bg-[#ecf1f7] px-[1em] font-medium text-black [transition:all_.225s_ease-in-out] hover:bg-[#8080801a] dark:bg-[#80808026] dark:text-white dark:hover:text-[#ffffff80]">
            @if (isset($icon))
                <div class="flex flex-row items-center gap-2">
                    @svg($icon, 'icon_2rem')
                    {{ $title }}
                </div>
            @else
                {{ $title }}
            @endif
            <div class="button">
                <x-loader.compiled :$uid :$attribute size="1.35rem" borderRadius="0.5rem" />
                @svg('arrow-forward', 'icon_grey icon_2rem icon_p6 icon_radius-0.5rem group-hover:scale-105! group-hover:text-white! group-hover:bg-[#0d6efd]!', ["id" => "arrow-forward"])
            </div>
        </div>
    @endif
</xbutton>
