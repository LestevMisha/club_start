<x-message.compiled :uid="uniqid()" seconds="10">
    <x-read-more.compiled :uid="uniqid()">
        <div class="flex flex-row gap-2">
            @svg('checkcircle', 'w-4 h-4 text-[#00c45a]')
            <span class="more mt-[0.15rem] text-[0.8rem] font-normal leading-none text-[#00c45a]">{{ $data }}</span>
        </div>
    </x-read-more.compiled>
</x-message.compiled>

@stack('components.scripts')
@stack('components.styles')
