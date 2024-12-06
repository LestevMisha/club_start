<section class="dark:bg-black relative m-0 h-full w-full bg-white p-0 pt-24">
    <div class="min-w-96 max-w-96 relative z-10 m-auto w-full xl:max-w-[1200px]">
        <div class="flex w-full flex-col">
            <div class="mb-12 flex h-fit flex-col items-center justify-center">
                <div class="dark:text-white relative mb-4 w-fit text-center text-4xl font-bold uppercase text-black xl:text-[2.5rem]">
                    <span
                        class="text-nowrap dark:before:bg-[#0d6efd] relative !-z-[1] uppercase before:absolute before:right-0 before:top-2/4 before:-z-10 before:block before:h-10 before:w-full before:-translate-x-[4%] before:-translate-y-1/2 before:bg-[#6fa9ff] before:p-[0.3rem] before:content-[''] before:[rotate:1deg]">{!! __('Content') !!}</span>
                    {!! __('for your store') !!}
                </div>
            </div>
            <div class="mb-4 flex flex-col gap-4 !px-4 xl:flex-row xl:gap-16">
                <div class="flex w-full flex-col xl:w-1/2">
                    <div class="min-h-24 mx-auto mb-4 flex flex-col xl:w-80">
                        <div class="dark:text-white relative mb-2 text-2xl font-semibold text-black">
                            {!! __('Edited photo') !!}
                        </div>
                        <div class="relative font-light text-[#acacac]">
                            {!! __('We organize photo sessions with popular sneakers to show how they look on feet.') !!}
                        </div>
                    </div>
                </div>
                <div class="flex w-full flex-col xl:w-1/2">
                    <div class="min-h-24 mx-auto mb-4 flex flex-col xl:w-80">
                        <div class="dark:text-white relative mb-2 text-2xl font-semibold text-black">
                            {!! __('Behind the Scenes') !!}
                        </div>
                        <div class="relative font-light text-[#acacac]">
                            {!! __('To make sure the content is not taken from the internet, we document the shooting process "behind the scenes" and publish the files in the Start Club.') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Swiper_v5 hook klotMo33_nE -->
        <div class="relative">
            <div class="js-swiper-v5 m-0 flex flex-col justify-between !overflow-visible !px-4 pb-8 xl:flex-row xl:!overflow-hidden">
                <div class="js-justify-arrows swiper-wrapper flex w-full flex-row justify-between [transition:all_0.225s_ease-in-out]">
                    <div class="swiper-slide ![&.swiper-slide-active]:opacity-100 !flex !w-full !flex-row gap-4 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:gap-16 xl:opacity-100">
                        <div class="flex w-1/2 flex-col">
                            <img src="{{ URL::asset('assets/images/min-jpeg/edited/edited_1.jpeg') }}"
                                class="relative mx-auto h-72 w-full rounded-2xl border-[none] object-cover xl:h-96 xl:w-80" type="image/jpeg" alt="sneak-edition-2" loading="lazy">
                        </div>
                        <div class="flex w-1/2 flex-col">
                            <video class="relative mx-auto h-72 w-full rounded-2xl border-[none] object-cover xl:h-96 xl:w-80" muted controls>
                                <source src="{{ URL::asset('assets/videos/behind-the-scene-portview/1.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="swiper-slide ![&.swiper-slide-active]:opacity-100 !flex !w-full !flex-row gap-4 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:gap-16 xl:opacity-100">
                        <div class="flex w-1/2 flex-col">
                            <img src="{{ URL::asset('assets/images/min-jpeg/edited/edited_2.jpeg') }}"
                                class="relative mx-auto h-72 w-full rounded-2xl border-[none] object-cover xl:h-96 xl:w-80" type="image/jpeg" alt="sneak-edition-2" loading="lazy">
                        </div>
                        <div class="flex w-1/2 flex-col">
                            <video class="relative mx-auto h-72 w-full rounded-2xl border-[none] object-cover xl:h-96 xl:w-80" muted controls>
                                <source src="{{ URL::asset('assets/videos/behind-the-scene-portview/2.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="swiper-slide ![&.swiper-slide-active]:opacity-100 !flex !w-full !flex-row gap-4 opacity-10 ![transition:opacity_0.225s_ease-in-out] xl:gap-16 xl:opacity-100">
                        <div class="flex w-1/2 flex-col">
                            <img src="{{ URL::asset('assets/images/min-jpeg/edited/edited_3.jpeg') }}"
                                class="relative mx-auto h-72 w-full rounded-2xl border-[none] object-cover xl:h-96 xl:w-80" type="image/jpeg" alt="sneak-edition-2" loading="lazy">
                        </div>
                        <div class="flex w-1/2 flex-col">
                            <video class="relative mx-auto h-72 w-full rounded-2xl border-[none] object-cover xl:h-96 xl:w-80" muted controls>
                                <source src="{{ URL::asset('assets/videos/behind-the-scene-portview/3.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="swiper-arrow swiper-button-next"></div>
                <div class="swiper-arrow swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>