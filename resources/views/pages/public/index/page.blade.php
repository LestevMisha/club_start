<div class="">
    @include('pages.public.index.sections.hero')
    @include('pages.public.index.sections.offers')
    @include('pages.public.index.sections.three-reasons-why')
    @include('pages.public.index.sections.trend')
    @include('pages.public.index.sections.content')
    @include('pages.public.index.sections.tariff')
    @include('pages.public.index.sections.sold-products')
    @include('pages.public.index.sections.work-process')
    @include('pages.public.index.sections.author')
    @include('pages.public.index.sections.FAQ')

    <div class="js-modal-outer fixed left-0 top-0 z-999 hidden h-full w-full">
        <div class="js-modal-middle h-full w-full animate-fadeIn">
            <div class="noise-before absolute left-2/4 top-2/4 flex min-w-96 max-w-96 min-h-[28rem] max-h-[75%] -translate-x-1/2 -translate-y-1/2 rounded-2xl bg-white dark:bg-[#0e0e0e]!">
                @svg('close', 'js-modal-close absolute z-101 -right-4 -top-4 icon icon_2.5rem bg-white! dark:bg-[#0e0e0e]! dark:[box-shadow:0_0_3rem_0_#ffffff66] [box-shadow:0_0_3rem_0_#00000066] icon_grey icon_p7 icon_radius-full icon_hover-v3 cursor-pointer')
                <div class="relative overflow-hidden">
                    <div class="js-modal-inner h-full w-full overflow-y-scroll">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="relative m-0 h-full w-full bg-white p-0 pt-24 dark:bg-black">
        <div class="min-w-96 max-w-96 relative z-10 m-auto w-full xl:max-w-[75rem]">
            <div
                class="noise-before relative mx-auto flex h-auto w-full flex-col rounded-bl-[0] rounded-br-[0] rounded-tl-[5rem] rounded-tr-[5rem] bg-[#6666661A] p-8 py-12 backdrop-blur-[2rem] backdrop-filter overflow-hidden">
                <div class="relative text-center text-[#666666]">
                    {{ __('pages/public/index.171') }}<br />
                    {{ __('pages/public/index.172') }}<br />
                    {{ __('pages/public/index.173') }}<br />
                    {{ __('pages/public/index.177') }}<br /><br />
                    {{ __('pages/public/index.174') }}&nbsp;<a class="text-[#0d6efd]" target="_blank" href="https://t.me/ClubStarthelp_bot">@ClubStarthelp_bot</a>
                </div>
            </div>
        </div>
    </footer>
</div>
