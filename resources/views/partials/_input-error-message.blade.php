<x-read-more.compiled :uid="uniqid()">
    <div class="flex flex-row gap-2">
        @svg('exclamation-point', 'icon_red')
        <span class="more mt-[0.15rem] text-[0.8rem] font-normal leading-none text-[#e31c1c]">{{ $data }}</span>
    </div>
</x-read-more.compiled>

@stack('components.scripts')
@stack('components.styles')
