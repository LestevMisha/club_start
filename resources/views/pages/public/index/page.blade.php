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

    {{-- hook QsAAi29_1x --}}
    {{-- <div id="video-intro">
            <div class="video-wrapper">
                @svg('red-cross', 'b-img b-img_remove')
                <div class="b-img b-img_remove v1">—</div>
                <video src="{{ URL::asset('assets/videos/camera.mp4') }}" autoplay muted loop>
                </video>
            </div>
        </div> --}}

    <div class="modal-container">
        <div class="modal-background">
            <div class="modal">
            </div>
        </div>
    </div>

    <footer class="dark:bg-black relative m-0 h-full w-full bg-white p-0 pt-24">
        <div class="min-w-96 max-w-96 relative z-10 m-auto w-full xl:max-w-[1200px]">
            <div
                class="noise-before relative mx-auto flex h-auto w-full flex-col rounded-bl-[0] rounded-br-[0] rounded-tl-[5rem] rounded-tr-[5rem] bg-[#6666661A] p-8 py-12 backdrop-blur-[2rem] backdrop-filter">
                <div class="relative text-center text-[#666666]">
                    ИП Шкитов Даниил Алексеевич<br />
                    ОГРНИП 322325600026496<br />
                    ИНН 325704482456<br />
                    Банк укажите наименование банка<br />
                    БИК 041501601<br />
                    кор/счет 30101810400000000601<br />
                    Расчётный счёт 40817810308007337829<br />
                </div>
            </div>
        </div>
    </footer>
</div>
