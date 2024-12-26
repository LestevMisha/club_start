<xmessage
    {{ $attributes->merge(['class' => 'component fixed right-1/2 top-[-10%] z-[999] flex w-fit max-w-[30rem] translate-x-1/2 rounded-lg bg-[#ecf1f7] px-4 py-2 opacity-0 shadow-sm dark:bg-[#171717] [transition:_background-color_0.225s_ease-in-out,_top_0.5s_cubic-bezier(0.165,0.84,0.44,1)]']) }}
    data-uid="{{ $uid }}" data-js-initialized="false" data-seconds="{{ $seconds ?? 10 }}">
    {{ $slot }}
</xmessage>
