@extends('sub-layouts.public')
@section('sub-content')
    <div>
        <section class="b-section b-section_visible b-section_v1 pt-12 pb-12" id="section-target-1">
            <div class="container container_v2 mob">
                <div class="flex h reverse_mob">
                    <div id="custom_mobile" class="flex v w70 z-3 wmob mb-6">

                        <div class="b-text b-text_v5 b-text_v5.1 mb-1">{{ __('Online-access') }}</div>

                        <div class="b-text b-text_4.5em b-text_lh-1 b-text_700 fmob6 tcmob mb-2r">
                            {{ __('Dropshipping on sneakers') }}
                            <span class="b-text b-text_500 modeLight_darker b-text_white_mob span_custom">
                                {{ __('Just in 1 click') }}
                            </span>
                        </div>

                        <div class="b-text b-text_400 b-text_1.5em b-text_grey_mob br_remover_mob fmob3 tcmob mb-2 modeLight_darker">
                            {!! __('Start earning without experience, warehouse,<br /> employees or investments in goods') !!}
                        </div>

                        <div class="flex h gap align mob">
                            <a class="go-button v7 go-button_50%" href="{{ route('auth.register') }}">
                                {{ __('Join the Club') }}
                                <img class="b-img b-img_finger-click" src="{{ URL::asset('assets/images/finger-click.png') }}" alt="finger-click">
                            </a>

                            <div class="flex h align">
                                @svg('dynamic-premium.star-dynamic-premium', 'b-img b-img_face')
                                <div class="b-text b-text_400 b-text_grey b-text_grey-dark_mob modeLight_darker">
                                    {!! __('Monthly subscription<br /> for 6,000 rubles') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex v w30 hemFlex_mob wmob">
                        <div class="blue-light"></div>
                        <div id="anchor" class="z-2">
                        </div>
                        <img id="loadingOverlay" class="z-2" src="{{ URL::asset('assets/images/min-png/sneaker-in-motion.png') }}" alt="sneaker-in-motion">
                        <img class="b-img b-img_box" src="{{ URL::asset('assets/images/min-png/shipping-box.png') }}" alt="shipping-box">
                        <img class="b-img b-img_box b-img_box-cut" src="{{ URL::asset('assets/images/min-png/shipping-box-cut.png') }}" alt="shipping-box-cut">
                    </div>
                </div>
            </div>
            <div class="overlay"></div>
        </section>

        <section class="b-section b-section_visible pb-6">

            <div class="container container_v2 pb-2 mob">

                <div class="h-text mb-3">
                    <div class="b-text b-text_uppercase b-text_2.5em b-text_fit b-text_700 b-text_center b-text_blue-marker b-text_blue-marker_v3">
                        {{ __('Club members') }}<br>
                        <span class="b-text b-text_grey b-text_grey-dark_mob modeLight_darker b-text_400 b-text_08">
                            {{ __('Are provided with') }}
                        </span>
                    </div>
                </div>

                <div class="flex v gap mob">
                    <div class="flex h gap mob">
                        <div class="flex w50 h base wmob">
                            <div class="b-text b-text_2em b-text_700 mr-2"><span class="blue-circle-offset"></span>1
                            </div>
                            <div class="b-text b-text_1.3em">{{ __('Delivery of sneakers from 1 pair - dropshipping.') }}
                            </div>
                        </div>
                        <div class="flex w50 h base wmob">
                            <div class="b-text b-text_2em b-text_700 mr-2"><span class="blue-circle-offset"></span>2
                            </div>
                            <div class="b-text b-text_1.3em">
                                {{ __('Shipping of sneakers available from two locations - Krasnodar and Moscow.') }}</div>
                        </div>
                    </div>

                    <div class="flex h gap mob">
                        <div class="flex w50 h base wmob">
                            <div class="b-text b-text_2em b-text_700 mr-2"><span class="blue-circle-offset"></span>3
                            </div>
                            <div class="b-text b-text_1.3em">{{ __('610 sneaker models in stock.') }}</div>
                        </div>
                        <div class="flex w50 h base wmob">
                            <div class="b-text b-text_2em b-text_700 mr-2"><span class="blue-circle-offset"></span>4
                            </div>
                            <div class="b-text b-text_1.3em">
                                {{ __('Creating content for social media with our sneakers.') }}</div>
                        </div>
                    </div>

                    <div class="flex h gap mob">
                        <div class="flex w50 h base wmob">
                            <div class="b-text b-text_2em b-text_700 mr-2"><span class="blue-circle-offset"></span>5
                            </div>
                            <div class="b-text b-text_1.3em">
                                {{ __('Sneaker photos without watermarks in original quality.') }}</div>
                        </div>
                        <div class="flex w50 h base wmob">
                            <div class="b-text b-text_2em b-text_700 mr-2"><span class="blue-circle-offset"></span>6
                            </div>
                            <div class="b-text b-text_1.3em">
                                {{ __('Effective shoe promotion methods with an experienced targetologist.') }}</div>
                        </div>
                    </div>

                    <div class="flex h gap mob">
                        <div class="flex w50 h base wmob">
                            <div class="b-text b-text_2em b-text_700 mr-2"><span class="blue-circle-offset"></span>7
                            </div>
                            <div class="b-text b-text_1.3em">{{ __('Tracking models in stock - size chart.') }}</div>
                        </div>
                        <div class="flex w50 h base wmob">
                            <div class="b-text b-text_2em b-text_700 mr-2"><span class="blue-circle-offset"></span>8</div>
                            <div class="b-text b-text_1.3em">{{ __('Closed community in Telegram for our partners.') }}
                            </div>
                        </div>
                    </div>
                </div>



                <div class="flex h gap-2 mt-2 reverse_mob">
                    <div class="card card_blue card_v1 mob" id="custom-target-01">
                        <div class="b-text b-text_1.5em b-text_700 b-text_center">{{ __('Work within the club') }}</div>
                        <div class="flex v gap my-1">
                            <div class="flex h">
                                <div class="b-text b-text_nowrap">0 {{ __('rub') }}</div>
                                <span class="border-dot"></span>
                                <div class="b-text b-text_nowrap">{{ __('Warehouse rent') }}</div>
                            </div>
                            <div class="flex h space-btw">
                                <div class="b-text b-text_nowrap">0 {{ __('rub') }}</div>
                                <span class="border-dot"></span>
                                <div class="b-text b-text_nowrap">{{ __('Employee salaries') }}</div>
                            </div>
                            <div class="flex h space-btw">
                                <div class="b-text b-text_nowrap">0 {{ __('rub') }}</div>
                                <span class="border-dot"></span>
                                <div class="b-text b-text_nowrap">{{ __('Investment in goods') }}</div>
                            </div>
                            <div class="flex h space-btw">
                                <div class="b-text b-text_nowrap">6 000 {{ __('rub') }}</div>
                                <span class="border-dot"></span>
                                <div class="b-text b-text_nowrap">{{ __('Club payment') }}</div>
                            </div>
                        </div>
                        <a class="go-button go-button_hover v2 v5" href="{{ route('auth.register') }}">
                            {{ __('Join the Club') }}
                        </a>
                        <img class="fc_realted" src="{{ URL::asset('assets/images/finger-click.png') }}" alt="finger-click">
                        <img src="{{ URL::asset('assets/images/min-png/thumb-up.png') }}" class="b-img b-img_v4" alt="thumb-up" loading="lazy">
                    </div>
                    <div class="card card_v1 card_v1-danger mob">
                        <div class="b-text b-text_1.5em b-text_700 b-text_center">{{ __('Work Independently') }}</div>
                        <div class="flex v gap my-1">
                            <div class="flex h">
                                <div class="b-text b-text_nowrap">50 000 {{ __('rub') }}</div>
                                <span class="border-dot"></span>
                                <div class="b-text b-text_nowrap">{{ __('Warehouse rent') }}</div>
                            </div>
                            <div class="flex h space-btw">
                                <div class="b-text b-text_nowrap">90 000 {{ __('rub') }}</div>
                                <span class="border-dot"></span>
                                <div class="b-text b-text_nowrap">{{ __('Employee salaries') }}</div>
                            </div>
                            <div class="flex h space-btw">
                                <div class="b-text b-text_nowrap">3 500 000 {{ __('rub') }}</div>
                                <span class="border-dot"></span>
                                <div class="b-text b-text_nowrap">{{ __('Investment in goods') }}</div>
                            </div>
                            <div class="flex h space-btw">
                                <div class="b-text b-text_nowrap">30 000 {{ __('rub') }}</div>
                                <span class="border-dot"></span>
                                <div class="b-text b-text_nowrap">{{ __('Shooting expenses') }}</div>
                            </div>
                        </div>
                        <div class="b-text b-text_1.3em b-text_700">{{ __('Total: 3 670 000 rub.') }}</div>
                        @svg('red-cross', 'b-img b-img_cross-thick')
                    </div>
                </div>

            </div>

        </section>

        <section class="b-section b-section_v2 b-section_visible pt-3">
            <div class="container container_v2 mob">

                <div class="h-text">
                    <div class="b-text b-text_uppercase b-text_fit b-text_2.5em b-text_700 b-text_center mb-3r">
                        {{ __('The club is definitely for you if') }}
                    </div>
                </div>

                <div class="flex h gap_2 mb-1r">
                    <div class="b-text b-text_5em b-text_blue b-text_900 b-text_lh-1em">1</div>
                    <div class="b-text b-text_2em b-text_600 b-text_400 my-auto disable_br_mob fmob3">
                        {!! __('You want to start your business<br /> from home') !!}
                    </div>
                </div>

                {{-- Swiper_v2 Klg4g --}}
                <div class="swiper-area relative">
                    <div class="swiper swiper_v2 flex space-btw h mob gap_2 video-slider flex hidden">
                        <div class="swiper-wrapper flex h">
                            <div class="flex v mobalign w100 mob swiper-slide">
                                <div class="flex v hmin6 mb-1r __text-block">
                                    <div class="b-text b-text_v5 b-text_600 mb-05">
                                        {{ __('Stock Photos') }}
                                    </div>
                                    <div class="b-text b-text_400 b-text_grey">
                                        {{ __('We take pictures of the sneakers in the warehouse and upload the photos to a special folder for partners.') }}
                                    </div>
                                </div>
                                <div class="MAIN__1Atel video-container_1Atel mob_m0x-auto">
                                    <video loading="lazy" class="video_1Atel __slide-block" preload="none" poster="{{ URL::asset('assets/images/min-jpeg/block-1/1.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/block-1/1.mp4') }}" type="video/mp4">
                                        {{ __('Your browser does not support video elements.') }}
                                    </video>
                                    <div class="circle_1Atel"></div>
                                    <div class="play-circle_1Atel"></div>
                                    <div class="ring_1Atel"></div>
                                    <img src="{{ URL::asset('assets/images/finger-click.png') }}" class="fc_realted" alt="finger-click" loading="lazy">
                                </div>
                            </div>

                            <div class="flex v mobalign w100 mx-2.5 mx-2.5_mob swiper-slide">
                                <div class="flex v hmin6 mb-1r __text-block">
                                    <div class="b-text b-text_v5 b-text_600 mb-05">
                                        {{ __('Content with sneakers') }}
                                    </div>
                                    <div class="b-text b-text_400 b-text_grey">
                                        {{ __('Every season we rent a studio, invite models, and create content for your store.') }}
                                    </div>
                                </div>
                                <div class="MAIN__1Atel video-container_1Atel mob_m0x-auto">
                                    <video loading="lazy" class="video_1Atel __slide-block" preload="none" poster="{{ URL::asset('assets/images/min-jpeg/block-1/2.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/block-1/2.mp4') }}" type="video/mp4">
                                        {{ __('Your browser does not support video elements.') }}
                                    </video>
                                    <div class="circle_1Atel"></div>
                                    <div class="play-circle_1Atel"></div>
                                    <div class="ring_1Atel"></div>
                                    <img src="{{ URL::asset('assets/images/finger-click.png') }}" class="fc_realted" alt="finger-click" loading="lazy">
                                </div>
                            </div>

                            <div class="flex v mobalign w100 mob swiper-slide">
                                <div class="flex v hmin6 mb-1r __text-block">
                                    <div class="b-text b-text_v5 b-text_600 mb-05">
                                        {{ __('Product Delivery') }}
                                    </div>
                                    <div class="b-text b-text_400 b-text_grey">
                                        {{ __('Sneakers are shipped to customers from our warehouse by our employees.') }}
                                    </div>
                                </div>
                                <div class="MAIN__1Atel video-container_1Atel mob_m0x-auto">
                                    <video loading="lazy" class="video_1Atel __slide-block" preload="none" poster="{{ URL::asset('assets/images/min-jpeg/block-1/3.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/block-1/3.mp4') }}" type="video/mp4">
                                        {{ __('Your browser does not support video elements.') }}
                                    </video>
                                    <div class="circle_1Atel"></div>
                                    <div class="play-circle_1Atel"></div>
                                    <div class="ring_1Atel"></div>
                                    <img src="{{ URL::asset('assets/images/finger-click.png') }}" class="fc_realted" alt="finger-click" loading="lazy">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-arrow swiper-button-next"></div>
                        <div class="swiper-arrow swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                {{-- hook EDoLA02_93 --}}
                @svg('blue-column-blur', 'b-img b-img_v23')
            </div>
            <div class="circle_overlap">
                <div class="bg_noise"></div>
            </div>

            <div class="bg_noise"></div>
        </section>

        <section class="b-section b-section_v2 b-section_visible pt-6">

            {{-- hook Astod62_ds --}}
            <img src="{{ URL::asset('assets/images/dan-4.png') }}" class="b-img b-img_v19" type="image/png" alt="dan-4" loading="lazy" id="responsive-img">

            <div class="container container_v2 mob pt-3">
                <div class="flex v">
                    <div class="flex w70 v mob gap">

                        <div class="flex h gap_2">
                            <div class="b-text b-text_5em b-text_blue b-text_900 b-text_lh-1em">2</div>
                            <div class="b-text b-text_2em b-text_600 b-text_400 my-auto disable_br_mob fmob3">
                                {!! __('No money to invest in<br /> quality products') !!}
                            </div>
                        </div>

                        @svg('dotted-arrow', 'arrow-icon v1')

                        <div class="b-text b-text_1.3em b-text_grey b-text_400 fmob1 mb-2r b-text_w90 modeLight_darker mob">
                            {!! __("No need to invest money in products! Thanks to the large number of partners in \"START CLUB,\" we have the opportunity to acquire the most in-demand sneakers.") !!}
                        </div>


                        {{-- Swiper_v1 EDfa3d --}}
                        <div class="swiper-area relative">
                            <div class="swiper swiper_v1 video-slider flex hidden">
                                <div class="swiper-wrapper flex h w100">
                                    <div class="swiper-slide">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/2.JPG') }}" class="b-img b-img_v5 cursor_grab __slide-block mx-auto"
                                            type="image/jpeg" alt="price-list-2">
                                    </div>

                                    <div class="swiper-slide">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/3.JPG') }}" class="b-img b-img_v5 cursor_grab __slide-block mx-auto"
                                            type="image/jpeg" alt="price-list-3">
                                    </div>

                                    <div class="swiper-slide">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/4.JPG') }}" class="b-img b-img_v5 cursor_grab __slide-block mx-auto"
                                            type="image/jpeg" alt="price-list-4">
                                    </div>

                                    <div class="swiper-slide">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/5.JPG') }}" class="b-img b-img_v5 cursor_grab __slide-block mx-auto"
                                            type="image/jpeg" alt="price-list-5">
                                    </div>

                                    <div class="swiper-slide">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/6.JPG') }}" class="b-img b-img_v5 cursor_grab __slide-block mx-auto"
                                            type="image/jpeg" alt="price-list-6">
                                    </div>

                                    <div class="swiper-slide">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/7.JPG') }}" class="b-img b-img_v5 cursor_grab __slide-block mx-auto"
                                            type="image/jpeg" alt="price-list-7">
                                    </div>

                                    <div class="swiper-slide">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/8.JPG') }}" class="b-img b-img_v5 cursor_grab __slide-block mx-auto"
                                            type="image/jpeg" alt="price-list-8">
                                    </div>

                                    <div class="swiper-slide">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/9.JPG') }}" class="b-img b-img_v5 cursor_grab __slide-block mx-auto"
                                            type="image/jpeg" alt="price-list-9">
                                    </div>

                                    <div class="swiper-slide">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/10.JPG') }}" class="b-img b-img_v5 cursor_grab __slide-block mx-auto"
                                            type="image/jpeg" alt="price-list-10">
                                    </div>

                                    <div class="swiper-slide">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/11.JPG') }}" class="b-img b-img_v5 cursor_grab __slide-block mx-auto"
                                            type="image/jpeg" alt="price-list-11">
                                    </div>

                                    <div class="swiper-slide">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/12.JPG') }}" class="b-img b-img_v5 cursor_grab __slide-block mx-auto"
                                            type="image/jpeg" alt="price-list-12">
                                    </div>

                                    <div class="swiper-slide">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/13.JPG') }}" class="b-img b-img_v5 cursor_grab __slide-block mx-auto"
                                            type="image/jpeg" alt="price-list-13">
                                    </div>

                                    <div class="swiper-slide">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/14.JPG') }}" class="b-img b-img_v5 cursor_grab __slide-block mx-auto"
                                            type="image/jpeg" alt="price-list-14">
                                    </div>

                                    <div class="swiper-slide">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/15.JPG') }}" class="b-img b-img_v5 cursor_grab __slide-block mx-auto"
                                            type="image/jpeg" alt="price-list-15">
                                    </div>

                                    <div class="swiper-slide">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/16.JPG') }}" class="b-img b-img_v5 cursor_grab __slide-block mx-auto"
                                            type="image/jpeg" alt="price-list-16">
                                    </div>

                                    <div class="swiper-slide">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/17.JPG') }}" class="b-img b-img_v5 cursor_grab __slide-block mx-auto"
                                            type="image/jpeg" alt="price-list-17">
                                    </div>

                                    <div class="swiper-slide">
                                        <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/price-list/1.JPG') }}" class="b-img b-img_v5 cursor_grab __slide-block mx-auto"
                                            type="image/jpeg" alt="price-list-1">
                                    </div>
                                </div>
                                <div class="swiper-arrow swiper-button-next"></div>
                                <div class="swiper-arrow swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="bg_noise"></div>

        </section>

        <section class="b-section b-section_v2 b-section_hidden">
            <div class="container container_v2 mob pt-3">

                <div class="flex v my-6">

                    @svg('dynamic-premium.calender-dynamic-premium', 'b-img b-img_v31')

                    <div class="flex w70 wmob mb-2r">
                        <div class="flex v gap mb-1r">
                            <div class="flex h gap_2">
                                <div class="b-text b-text_5em b-text_blue b-text_900 b-text_lh-1em">3</div>

                                <div class="b-text b-text_2em b-text_600 b-text_400 my-auto disable_br_mob fmob3">
                                    {!! __("Don't know which business to start,<br /> to earn in the first 3 days") !!}
                                </div>
                            </div>
                            <div class="b-text b-text_grey b-text_1.3em b-text_400 fmob1">
                                {{ __('Business with sneakers pays off from the very first sale!') }}
                            </div>
                        </div>
                    </div>

                    <div class="flex h gap_2 mob">
                        <img id="banknote" src="{{ URL::asset('assets/images/min-png/money-sticker.png') }}" class="b-img b-img_v4 v4_0" alt="banknote" loading="lazy">

                        {{-- Stopp09_er --}}
                        <div class="flex h gap_2 slight-bg mob">
                            <div class="flex w50 v gap_2 mob">
                                <div class="slidecontainer">
                                    <div class="flex h space-btw gap_2 mob mb-2r">
                                        <div class="b-text b-text_1.3em">{{ __('Number of subscribers in your store') }}
                                        </div>
                                        <div class="b-text b-text_1.3em b-text_nowrap b-text_v4 b-text_fith w">
                                            <span id="subs-value"></span>
                                            {{ __('people') }}
                                        </div>
                                    </div>
                                    <input type="range" min="1" max="1000" value="100" class="slider" id="subs">
                                </div>

                                <div class="slidecontainer">
                                    <div class="flex h space-btw gap_2 mob mb-2r">
                                        <div class="b-text b-text_1.3em">{{ __('Markup per pair') }}</div>
                                        <div class="b-text b-text_1.3em b-text_nowrap b-text_v4 b-text_fith w">
                                            <span id="add-price-value"></span>
                                            {{ __('rub') }}
                                        </div>
                                    </div>
                                    <input type="range" min="1000" max="5000" value="1000" class="slider" id="add-price">
                                </div>
                            </div>

                            <div class="flex w50 v gap_2 mob">
                                <div class="flex v gap_2">
                                    <div class="b-text b-text_1.3em b-text_400">
                                        {{ __('You will earn per month from your store') }}</div>
                                    <div class="b-text b-text_1.3em">{{ __('From:') }} <span id="min-result"></span>
                                        {{ __('rub') }}</div>
                                    <div class="b-text b-text_1.3em">{{ __('To:') }} <span id="max-result"></span>
                                        {{ __('rub') }}</div>
                                    <div class="b-text b-text_grey-dark">
                                        {{ __("Calculations are based on an average (from 0.5% to 3%) conversion rate of subscribers to customers. Conversion depends on the store's packaging, audience's purchasing power, and how long the store has been operating.") }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="bg_noise"></div>

            <div class="fade-in fade-in_v1 bottom z-0"></div>
        </section>

        <section class="b-section pt-6">

            @svg('ui-set.hand-over', 'ui-hand-over-icon')
            <img class="ui-hand-over-icon" src="{{ URL::asset('assets/images/min-png/hand-over.png') }}" alt="hand-over">
            <div class="ui-orange-blur"></div>


            <img class="ui-thorus-knot-icon" src="{{ URL::asset('assets/images/min-png/thorus-knot.png') }}" alt="thorus-knot">
            <div class="ui-green-blur"></div>

            <img class="ui-cube-icon" src="{{ URL::asset('assets/images/min-png/cube.png') }}" alt="cube">
            <div class="ui-purple-blur"></div>


            <div class="container container_v2 mob">
                <div class="flex v">

                    <div class="h-text">
                        <div class="b-text b-text_fit-content b-text_2em b-text_700 b-text_center custom_media_size_change b-text_blue-marker b-text_blue-marker_v4 mb-1r">
                            СОЗДАЕМ
                            <span class="relative nowrap blue-marker trand">ТРЭНД</span>
                            В ЭТОЙ НИШЕ
                        </div>
                    </div>
                    <div class="b-text b-text_1.5em b-text_400 b-text_center fmob1 mb-6r">
                        Наша цель — чтобы каждый получил выгоду от
                        <br />
                        продукта и эффективно продавал его.
                    </div>

                    <div class="flex v gap_2 w100">
                        <div class="flex h gap gap_2_mob w100 mob">

                            <div class="flex w25 mob">
                                <div class="flex v w100 v100">
                                    <div class="mb-1">
                                        <div class="b-text b-text_2em b-text_700 tcmob">Таблица XL</div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="b-text b-text_1.2em b-text_400 b-text_grey tcmob">
                                            Удобная таблица с актуальными размерами кроссовок на складе.
                                        </div>
                                    </div>
                                    <button class="ui-set-button modal-button">
                                        <div class="b-text b-text_1.2em">подробнее</div>
                                    </button>
                                    @svg('ui-set.notes', 'ui-set-icon')
                                </div>
                                @svg('ui-number-set.1', 'ui-number-set-icon')
                            </div>

                            <div class="flex w25 mob">
                                <div class="flex v w100 v100">
                                    <div class="mb-1">
                                        <div class="b-text b-text_2em b-text_700 tcmob">Поддержка</div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="b-text b-text_1.2em b-text_400 b-text_grey tcmob">
                                            Отдел поддержки для заказов и вопросов участников клуба.
                                        </div>
                                    </div>
                                    <button class="ui-set-button modal-button">
                                        <div class="b-text b-text_1.2em">подробнее</div>
                                    </button>
                                    @svg('ui-set.chat', 'ui-set-icon')
                                </div>
                                @svg('ui-number-set.2', 'ui-number-set-icon')
                            </div>

                            <div class="flex w25 mob">
                                <div class="flex v w100 v100">
                                    <div class="mb-1">
                                        <div class="b-text b-text_2em b-text_700 tcmob">Видеоуроки</div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="b-text b-text_1.2em b-text_400 b-text_grey tcmob">
                                            Видео уроки от нашего таргетолога с инфой как и где закупать рекламу.
                                        </div>
                                    </div>
                                    <button class="ui-set-button modal-button">
                                        <div class="b-text b-text_1.2em">подробнее</div>
                                    </button>
                                    @svg('ui-set.play', 'ui-set-icon')
                                </div>
                                @svg('ui-number-set.3', 'ui-number-set-icon')
                            </div>

                            <div class="flex w25 mob">
                                <div class="flex v w100 v100">
                                    <div class="mb-1">
                                        <div class="b-text b-text_2em b-text_700 tcmob">Договор</div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="b-text b-text_1.2em b-text_400 b-text_grey tcmob">
                                            Мы заключили договор со СДЭК. Отправка товаров вдвое дешевле.
                                        </div>
                                    </div>
                                    <button class="ui-set-button modal-button">
                                        <div class="b-text b-text_1.2em">подробнее</div>
                                    </button>
                                    @svg('ui-set.paper', 'ui-set-icon')
                                </div>
                                @svg('ui-number-set.4', 'ui-number-set-icon')
                            </div>
                        </div>

                        <div class="flex h gap gap_2_mob w100 mob">

                            {{-- 4 items here --}}
                            <div class="flex w25 mob">
                                <div class="flex v w100 v100">
                                    <div class="mb-1">
                                        <div class="b-text b-text_2em b-text_700 tcmob">Трек заказа</div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="b-text b-text_1.2em b-text_400 b-text_grey tcmob">
                                            После отправки заказа, высылаем фото и трек-номер для отслеживания.
                                        </div>
                                    </div>
                                    <button class="ui-set-button modal-button">
                                        <div class="b-text b-text_1.2em">подробнее</div>
                                    </button>
                                    @svg('ui-set.show', 'ui-set-icon')
                                </div>
                                @svg('ui-number-set.5', 'ui-number-set-icon')
                            </div>

                            <div class="flex w25 mob">
                                <div class="flex v w100 v100">
                                    <div class="mb-1">
                                        <div class="b-text b-text_2em b-text_700 tcmob">Выгода</div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="b-text b-text_1.2em b-text_400 b-text_grey tcmob">
                                            У вас будет ссылка для продажи "КЛУБА START",
                                            <br />
                                            с 50% за каждого.
                                        </div>
                                    </div>
                                    <button class="ui-set-button modal-button">
                                        <div class="b-text b-text_1.2em">подробнее</div>
                                    </button>
                                    @svg('ui-set.discount', 'ui-set-icon')
                                </div>
                                @svg('ui-number-set.6', 'ui-number-set-icon')
                            </div>

                            <div class="flex w25 mob">
                                <div class="flex v w100 v100">
                                    <div class="mb-1">
                                        <div class="b-text b-text_2em b-text_700 tcmob">Ассортимент</div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="b-text b-text_1.2em b-text_400 b-text_grey tcmob">
                                            Мы расширяем ассортимент брендовой одеждой и аксессуаров.
                                        </div>
                                    </div>
                                    <button class="ui-set-button modal-button">
                                        <div class="b-text b-text_1.2em">подробнее</div>
                                    </button>
                                    @svg('ui-set.tick', 'ui-set-icon')
                                </div>
                                @svg('ui-number-set.7', 'ui-number-set-icon')
                            </div>

                            <div class="flex w25 mob">
                                <div class="flex v w100 v100">
                                    <div class="mb-1">
                                        <div class="b-text b-text_2em b-text_700 tcmob">Удобство</div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="b-text b-text_1.2em b-text_400 b-text_grey tcmob">
                                            Каждый участник получает индивидуальную таблицу для отслеживания продаж.
                                        </div>
                                    </div>
                                    <button class="ui-set-button modal-button">
                                        <div class="b-text b-text_1.2em">подробнее</div>
                                    </button>
                                    @svg('ui-set.stars', 'ui-set-icon')
                                </div>
                                @svg('ui-number-set.8', 'ui-number-set-icon')
                            </div>

                        </div>
                    </div>

                    {{-- <div class="flex v gap_2">


                        <div class="flex h gap_2 mob">

                            <div class="flex h gap w50 wmob">
                                <img src="{{ URL::asset('assets/images/min-jpeg/trand-niche-img/1-items-table.jpg') }}" alt="account" class="b-img b-img_full b-img_bordered b-img_v22">

                                <div class="flex v gap w65">
                                    <div class="b-text b-text_1.5em">1. Заголовок</div>
                                    <div class="b-text b-text_grey b_text-1.3em b-text_400">
                                        Удобная таблица с актуальными размерами кроссовок
                                        на складе
                                    </div>
                                </div>
                            </div>

                            <div class="flex h gap w50 wmob">
                                <img src="{{ URL::asset('assets/images/min-jpeg/trand-niche-img/2-account-screen.jpg') }}" alt="account" class="b-img b-img_full b-img_bordered b-img_v22">
                                <div class="flex v gap w65">
                                    <div class="b-text b-text_1.5em">2. Заголовок</div>
                                    <div class="b-text b-text_grey b_text-1.3em b-text_400">
                                        Отдел поддержки для заказов и вопросов участников
                                        клуба
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="flex h gap_2 mob">

                            <div class="flex h gap w50 wmob">
                                <img src="{{ URL::asset('assets/images/min-jpeg/trand-niche-img/3-video-lessons.jpg') }}" alt="account" class="b-img b-img_full b-img_bordered b-img_v22">
                                <div class="flex v gap w65">
                                    <div class="b-text b-text_1.5em">3. Заголовок</div>
                                    <div class="b-text b-text_grey b_text-1.3em b-text_400">
                                        Видео уроки от нашего таргетолога с инфой как и где закупать рекламу
                                    </div>
                                </div>
                            </div>

                            <div class="flex v h20rem hmobauto gap w50 wmob">
                                <div class="flex v gap w65 wmob">
                                    <div class="b-text b-text_1.5em">4. Заголовок</div>
                                    <div class="b-text b-text_grey b_text-1.3em b-text_400">
                                        Мы заключили официальный договор со СДЭК. Отправка товаров нам
                                        обходится вдвое дешевле
                                    </div>
                                </div>
                                <div class="flex img_flex_overflow_preventor h gap_2">
                                    <img src="{{ URL::asset('assets/images/min-jpeg/trand-niche-img/4-SDEK/header.jpg') }}" alt="account" class="b-img b-img_full b-img_bordered b-img_v22 v22.1">
                                    <img src="{{ URL::asset('assets/images/min-jpeg/trand-niche-img/4-SDEK/body.jpg') }}" alt="account" class="b-img b-img_full b-img_bordered b-img_v22 v22.1">
                                    <img src="{{ URL::asset('assets/images/min-jpeg/trand-niche-img/4-SDEK/footer.jpg') }}" alt="account" class="b-img b-img_full b-img_bordered b-img_v22 v22.1">
                                </div>
                            </div>

                        </div>


                        <div class="flex h gap_2 mob">

                            <div class="flex h gap w50 wmob">
                                <img src="{{ URL::asset('assets/images/min-jpeg/trand-niche-img/5-track-code.jpg') }}" alt="account" class="b-img b-img_full b-img_bordered b-img_v22">
                                <div class="flex v gap w65">
                                    <div class="b-text b-text_1.5em">5. Заголовок</div>
                                    <div class="b-text b-text_grey b_text-1.3em b-text_400">
                                        После отправки вашего заказа, мы делаем фото и
                                        пересылаем вам трек-номер, для отслеживания доставки
                                        клуба
                                    </div>
                                </div>
                            </div>

                            <div class="flex h gap w50 wmob">
                                <img src="{{ URL::asset('assets/images/min-jpeg/trand-niche-img/6-referral-link.jpg') }}" alt="account" class="b-img b-img_full b-img_bordered b-img_v22">
                                <div class="flex v gap w65">
                                    <div class="b-text b-text_1.5em">6. Заголовок</div>
                                    <div class="b-text b-text_grey b_text-1.3em b-text_400">
                                        🔗 У вас будет собственная реферальная ссылка для
                                        продажи "КЛУБА START" За каждого привлеченного, вы получаете 50% от его участия
                                        закупать рекламу
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="flex h gap_2 mob">

                            <div class="flex h gap w50 wmob">
                                <img src="{{ URL::asset('assets/images/min-jpeg/trand-niche-img/7-products.jpg') }}" alt="cloth-3" class="b-img b-img_wfull-hauto b-img_bordered b-img_v22">
                                <div class="flex v gap w65">
                                    <div class="b-text b-text_1.5em">7. Заголовок</div>
                                    <div class="b-text b-text_grey b_text-1.3em b-text_400">
                                        🔥 Мы расширяем ассортимент не только кроссовками, но и брендовой одеждой и
                                        аксессуарами, для доп продаж
                                        клуба
                                    </div>
                                </div>
                            </div>

                            <div class="flex h gap w50 wmob">
                                <img src="{{ URL::asset('assets/images/min-jpeg/trand-niche-img/8-google-sheet.jpg') }}" alt="account" class="b-img b-img_full b-img_bordered b-img_v22">
                                <div class="flex v gap w65">
                                    <div class="b-text b-text_1.5em">8. Заголовок</div>
                                    <div class="b-text b-text_grey b_text-1.3em b-text_400">
                                        Каждый участник клуба получает индивидуальную таблицу для удобного отслеживания
                                        продаж.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>

        <section class="b-section b-section_visible pt-6">


            <div class="container container_v2 mob">
                <div class="flex v w70 mx-auto wmob">
                    <div class="h-text mb-3r">
                        <div class="b-text b-text_uppercase b-text_fit b-text_2em b-text_700 b-text_center b-text_blue-marker b-text_blue-marker_v2 custom_media_size_change">
                            <span class="relative nowrap blue-marker">{!! __('Content') !!}</span>
                            {!! __('for your store') !!}
                        </div>
                    </div>

                    <div class="flex h gap_4 mb-1 gap_1_mob mob">
                        <div class="block w50 mob">
                            <div class="flex v hmin6 mb-1r __text-block">
                                <div class="b-text b-text_1.5em b-text_600 mb-05">
                                    {!! __('Edited photo') !!}
                                </div>
                                <div class="b-text b-text_400 b-text_grey">
                                    {!! __('We organize photo sessions with popular sneakers to show how they look on feet.') !!}
                                </div>
                            </div>
                        </div>
                        <div class="block w50 mob">
                            <div class="flex v hmin6 mb-1r __text-block">
                                <div class="b-text b-text_1.5em b-text_600 mb-05">
                                    {!! __('Behind the Scenes') !!}
                                </div>
                                <div class="b-text b-text_400 b-text_grey">
                                    {!! __('To make sure the content is not taken from the internet, we document the shooting process "behind the scenes" and publish the files in the Start Club.') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- hook klotMo33_nE --}}
                <div class="swiper-area relative">
                    <div class="swiper swiper_v5 flex h gap_2 w70 mx-auto wmob flex hidden">
                        <div class="swiper-wrapper flex h">

                            <div class="swiper-slide">
                                <div class="flex h gap_4">
                                    <div class="block w50">
                                        <img src="{{ URL::asset('assets/images/min-jpeg/edited/edited_1.jpeg') }}" class="b-obj b-obj_v3" type="image/jpeg" alt="sneak-edition-2" loading="lazy">
                                    </div>

                                    <div class="block w50">
                                        <video class="b-obj b-obj_v3" muted controls>
                                            <source src="{{ URL::asset('assets/videos/behind-the-scene-portview/1.mp4') }}" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex h gap_4">
                                    <div class="block w50">
                                        <img src="{{ URL::asset('assets/images/min-jpeg/edited/edited_2.jpeg') }}" class="b-obj b-obj_v3" type="image/jpeg" alt="sneak-edition-2" loading="lazy">
                                    </div>
                                    <div class="block w50">
                                        <video class="b-obj b-obj_v3" muted controls>
                                            <source src="{{ URL::asset('assets/videos/behind-the-scene-portview/2.mp4') }}" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="flex h gap_4">
                                    <div class="block w50">
                                        <img src="{{ URL::asset('assets/images/min-jpeg/edited/edited_3.jpeg') }}" class="b-obj b-obj_v3" type="image/jpeg" alt="sneak-edition-2" loading="lazy">
                                    </div>
                                    <div class="block w50">
                                        <video class="b-obj b-obj_v3" muted controls>
                                            <source src="{{ URL::asset('assets/videos/behind-the-scene-portview/3.mp4') }}" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-arrow swiper-button-next"></div>
                        <div class="swiper-arrow swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                {{-- <img class="swipe_finger" src="{{ URL::asset('assets/images/finger-click.png') }}" alt="finger-click"> --}}

            </div>

        </section>

        <section class="b-section b-section_visible pt-6">
            {{-- hook Doors72_da --}}
            <div id="gradient-effect_bf2" class="container container_v2 mob">
                <div class="fade-in fade-in_v1 top -z-1"></div>
                <div class="vignette vignette_v1 -z-2"></div>
                <div class="grad-block grad-block_v1 -z-3">
                    <div id="follow-gradient" class="follow-gradient">
                        <div class="grad-text"></div>
                    </div>
                </div>

                <div class="flex v">
                    @svg('dynamic-premium.rocket-dynamic-premium', 'b-img b-img_rocket')
                    @svg('dynamic-premium.axe-dynamic-premium', 'b-img b-img_axe')

                    <div class="h-text mb-3r">
                        <div class="b-text b-text_uppercase b-text_fit b-text_2em b-text_700 b-text_center b-text_blue-marker b-text_blue-marker_v2 custom_media_size_change">
                            {{ __('Universal tariff') }}
                            <span class="relative block nowrap blue-marker mt-05r mx-auto">{{ __('everything included') }}</span>
                        </div>
                    </div>

                    <div class="flex fit w35 m-auto mob">
                        <div class="card flex align">
                            <div class="flex fit gap v mb-2r">
                                <div class="flex gap h align">
                                    @svg('check-circle', 'b-img b-img_v1')
                                    <div class="b-text b-text_1.3em b-text_400">{{ __('Sneakers at cost price') }}</div>
                                </div>
                                <div class="flex gap h align">
                                    @svg('check-circle', 'b-img b-img_v1')
                                    <div class="b-text b-text_1.3em b-text_400">{{ __('Feedback on all questions') }}
                                    </div>
                                </div>
                                <div class="flex gap h align">
                                    @svg('check-circle', 'b-img b-img_v1')
                                    <div class="b-text b-text_1.3em b-text_400">{{ __('Closed community in Telegram') }}
                                    </div>
                                </div>
                                <div class="flex gap h align">
                                    @svg('check-circle', 'b-img b-img_v1')
                                    <div class="b-text b-text_1.3em b-text_400">
                                        {{ __('Conferences and lectures on sneaker sales') }}</div>
                                </div>
                            </div>
                            <div class="flex v">
                                <div class="b-text b-text_1.3em b-text_center mb-1r">
                                    {!! __('Monthly subscription to<br /> "START CLUB"') !!}
                                </div>
                                <div class="b-text b-text_4em b-text_700 b-text_center mb-2r">{{ __('6,000 ₽') }}</div>
                                <a class="go-button v2 mb-1r" href="{{ route('auth.register') }}">{{ __('Ready to start') }}</a>
                                <div class="b-text b-text_grey b-text_center b-text_08">
                                    {!! __('By paying you accept the terms of the') !!}
                                    <br />
                                    <a href="{{ route('public.documents') }}">{{ __('offer contract') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="b-section b-section_visible pt-6">
            <div class="container container_v2 mob">

                <div class="flex v">

                    <div class="h-text">
                        <div class="b-text b-text_uppercase b-text_fit-content b-text_2em b-text_700 b-text_center custom_media_size_change b-text_blue-marker b-text_blue-marker_v1 mb-1r">
                            {{ __('Sold') }}
                            <span class="relative nowrap blue-marker">{{ __('~107 thousand') }}</span>
                            {{ __('pairs of sneakers') }}
                        </div>
                    </div>
                    <div class="b-text b-text_1.5em b-text_400 b-text_center fmob1 mb-3r">
                        {{ __('And here is what customers say about our product') }}
                    </div>

                    {{-- Swiper_v3 StWoom3s --}}
                    <div class="swiper-area relative">
                        <div class="swiper swiper_v3 relative video-slider flex hidden">
                            <div class="swiper-wrapper flex h">
                                <div class="flex v w100 swiper-slide">
                                    <video class="b-video b-video_v4 __slide-block" muted controls preload="none"
                                        poster="{{ URL::asset('assets/images/min-jpeg/feedback-posters/feedback-poster_1.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/feedbacks/feedback_1.mp4') }}" type="video/mp4">
                                    </video>
                                </div>

                                <div class="flex v w100 swiper-slide">
                                    <video class="b-video b-video_v4 __slide-block" muted controls preload="none"
                                        poster="{{ URL::asset('assets/images/min-jpeg/feedback-posters/feedback-poster_2.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/feedbacks/feedback_2.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <div class="flex v w100 swiper-slide">
                                    <video class="b-video b-video_v4 __slide-block" muted controls preload="none"
                                        poster="{{ URL::asset('assets/images/min-jpeg/feedback-posters/feedback-poster_3.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/feedbacks/feedback_3.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <div class="flex v w100 swiper-slide">
                                    <video class="b-video b-video_v4 __slide-block" muted controls preload="none"
                                        poster="{{ URL::asset('assets/images/min-jpeg/feedback-posters/feedback-poster_4.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/feedbacks/feedback_4.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <div class="flex v w100 swiper-slide">
                                    <video class="b-video b-video_v4 __slide-block" muted controls preload="none"
                                        poster="{{ URL::asset('assets/images/min-jpeg/feedback-posters/feedback-poster_5.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/feedbacks/feedback_5.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <div class="flex v w100 swiper-slide">
                                    <video class="b-video b-video_v4 __slide-block" muted controls preload="none"
                                        poster="{{ URL::asset('assets/images/min-jpeg/feedback-posters/feedback-poster_6.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/feedbacks/feedback_6.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <div class="flex v w100 swiper-slide">
                                    <video class="b-video b-video_v4 __slide-block" muted controls preload="none"
                                        poster="{{ URL::asset('assets/images/min-jpeg/feedback-posters/feedback-poster_7.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/feedbacks/feedback_7.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <div class="flex v w100 swiper-slide">
                                    <video class="b-video b-video_v4 __slide-block" muted controls preload="none"
                                        poster="{{ URL::asset('assets/images/min-jpeg/feedback-posters/feedback-poster_8.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/feedbacks/feedback_8.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <div class="flex v w100 swiper-slide">
                                    <video class="b-video b-video_v4 __slide-block" muted controls preload="none"
                                        poster="{{ URL::asset('assets/images/min-jpeg/feedback-posters/feedback-poster_9.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/feedbacks/feedback_9.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <div class="flex v w100 swiper-slide">
                                    <video class="b-video b-video_v4 __slide-block" muted controls preload="none"
                                        poster="{{ URL::asset('assets/images/min-jpeg/feedback-posters/feedback-poster_10.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/feedbacks/feedback_10.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <div class="flex v w100 swiper-slide">
                                    <video class="b-video b-video_v4 __slide-block" muted controls preload="none"
                                        poster="{{ URL::asset('assets/images/min-jpeg/feedback-posters/feedback-poster_11.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/feedbacks/feedback_11.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <div class="flex v w100 swiper-slide">
                                    <video class="b-video b-video_v4 __slide-block" muted controls preload="none"
                                        poster="{{ URL::asset('assets/images/min-jpeg/feedback-posters/feedback-poster_12.jpeg') }}">
                                        <source src="{{ URL::asset('assets/videos/feedbacks/feedback_12.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                            <div class="swiper-arrow swiper-button-next"></div>
                            <div class="swiper-arrow swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="b-section b-section_visible pt-6">
            <div class="fade-in fade-in_v1 top"></div>
            @svg('nike-pair', 'b-img b-img_v7')
            <div class="container container_v2 mob">

                <div class="h-text">
                    <div class="b-text b-text_uppercase b-text_fit-content b-text_2em b-text_700 b-text_center custom_media_size_change b-text_blue-marker b-text_blue-marker_v1 mb-1r">
                        <span class="relative nowrap blue-marker">{{ __('Work proccess of') }}</span>
                        {{ __('Club Start') }}
                    </div>
                </div>
                <div class="b-text b-text_1.5em b-text_400 b-text_center fmob1 mb-3r">
                    {!! __('Just 3 steps and you own your personal<br>online sneaker store.') !!}
                </div>

                <div class="accordion-container mb-5">
                    <div class="divider"></div>
                    <div class="accordion">

                        <div class="accordion-item noise">
                            <button id="accordion-button-1" aria-expanded="true">
                                <div class="flex h align">
                                    <span class="b-text b-text_grey b-text_grey_light-mode b-text_400 b-text_1.5em b-text_nowrap fmob1">{{ __('Step 1') }}</span>
                                    <span class="b-text b-text_600 b-text_2em fmob5 ml-05">{{ __('Sneakers at cost from 1 pair') }}</span>
                                </div>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">

                                <div class="flex gap_05 v mt-1.5">
                                    <div class="b-text b-text_1.3em b-text_600">{{ __('What you get:') }}</div>
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        {{ __('Supplier of sneakers working on the "dropshipping" system') }}</div>
                                </div>

                                <div class="flex gap_05 v mt-1.5">
                                    <div class="b-text b-text_1.3em b-text_600">💡 {{ __('Result:') }}</div>
                                    <div class="flex v gap_05">
                                        <div class="b-text b-text_400 b-text_1.2em">
                                            {{ __('1. Access to 610 sneaker models without investing in the product') }}
                                        </div>
                                        <div class="b-text b-text_400 b-text_1.2em">
                                            {{ __('2. Cost price of sneakers for you (NO MARKUP)') }}</div>
                                    </div>
                                </div>
                            </div>
                            <img loading="lazy" src="{{ URL::asset('assets/images/min-webp/coin.webp') }}" alt="coin" class="b-img b-img_v15" type="image/webp">
                        </div>

                        <div class="accordion-item noise">
                            <button id="accordion-button-2" aria-expanded="false">
                                <div class="flex h align">
                                    <span class="b-text b-text_grey b-text_grey_light-mode b-text_400 b-text_1.5em b-text_nowrap fmob1">{{ __('Step 2') }}</span>
                                    <span class="b-text b-text_600 b-text_2em fmob5 ml-05">{{ __('"Sneaker Seller" Knowledge Base') }}</span>
                                </div>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">

                                <div class="flex gap_05 v mt-1.5">
                                    <div class="b-text b-text_1.3em b-text_600">{{ __('What you get:') }}</div>
                                    <div class="flex v gap_05">
                                        <div class="b-text b-text_400 b-text_1.2em">
                                            {{ __('1. Access to the main Telegram channel "Start Club"') }}</div>
                                        <div class="b-text b-text_400 b-text_1.2em">
                                            {{ __('2. Access to the 3-year "archive" of the club (How we started and what steps led to such a result)') }}
                                        </div>
                                        <div class="b-text b-text_400 b-text_1.2em">
                                            {{ __('3. Google sheet with actual sizes') }}</div>
                                    </div>
                                </div>

                                <div class="flex gap_05 v mt-1.5">
                                    <div class="b-text b-text_1.3em b-text_600">{{ __('What you will learn:') }}</div>
                                    <div class="flex v gap_05">
                                        <div class="b-text b-text_400 b-text_1.2em">
                                            {{ __('1. Where to get photos and videos of supplies without a watermark') }}
                                        </div>
                                        <div class="b-text b-text_400 b-text_1.2em">
                                            {{ __('2. Mistake of 98.9% of entrepreneurs') }}</div>
                                        <div class="b-text b-text_400 b-text_1.2em">
                                            {{ __('3. How to beat all competitors and become #1 in your city') }}</div>
                                        <div class="b-text b-text_400 b-text_1.2em">{{ __('4. How to place an order') }}
                                        </div>
                                        <div class="b-text b-text_400 b-text_1.2em">
                                            {{ __('5. How to place an order with "cash on delivery"') }}</div>
                                        <div class="b-text b-text_400 b-text_1.2em">
                                            {{ __('6. Best markup on sneakers') }}</div>
                                        <div class="b-text b-text_400 b-text_1.2em">
                                            {{ __('7. Video from our targeting specialist on launching ads') }}</div>
                                        <div class="b-text b-text_400 b-text_1.2em">
                                            {{ __('8. Video course from Daniil on launching ads without money') }}</div>
                                        <div class="b-text b-text_400 b-text_1.2em">
                                            {{ __('9. How to communicate with customers to avoid losing sales') }}</div>
                                        <div class="b-text b-text_400 b-text_1.2em">
                                            {{ __('10. How to make 100 sales in the first 2 months of work') }}</div>
                                    </div>
                                </div>

                                <div class="flex gap_05 v mt-1.5">
                                    <div class="b-text b-text_1.3em b-text_600">💡 {{ __('Result:') }}</div>
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        {{ __('You will create a selling account for an online sneaker store') }}</div>
                                </div>
                            </div>
                            <img loading="lazy" src="{{ URL::asset('assets/images/min-png/heart.png') }}" alt="heart" class="b-img b-img_v15" type="image/png">
                        </div>

                        <div class="accordion-item noise">
                            <button id="accordion-button-3" aria-expanded="false">
                                <div class="flex h align">
                                    <span class="b-text b-text_grey b-text_grey_light-mode b-text_400 b-text_1.5em b-text_nowrap fmob1">{{ __('Step 3') }}</span>
                                    <span class="b-text b-text_600 b-text_2em fmob5 ml-05">{{ __('Sneaker Business Marathon') }}</span>
                                </div>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">

                                <div class="flex gap_05 v mt-1.5">
                                    <div class="b-text b-text_1.3em b-text_600">{{ __('What you get:') }}</div>
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        {{ __('Access to a 3-day online marathon for beginners in this business. In the format of photos | videos | voice messages, we will analyze how to start a business with sneakers') }}
                                    </div>
                                </div>

                                <div class="flex gap_05 v mt-1.5">
                                    <div class="b-text b-text_1.3em b-text_600">💡 {{ __('Result:') }}</div>
                                    <div class="flex v gap_05">
                                        <div class="b-text b-text_400 b-text_1.2em">
                                            {{ __('1. Complete understanding of all technical points') }}</div>
                                        <div class="b-text b-text_400 b-text_1.2em">
                                            {{ __('2. We will create an online sneaker store in 3 days') }}</div>
                                        <div class="b-text b-text_400 b-text_1.2em">
                                            {{ __('3. On the experience of others, you will learn how to avoid mistakes in working with sneakers') }}
                                        </div>
                                        <div class="b-text b-text_400 b-text_1.2em">
                                            {{ __('4. Analysis of the accounts of marathon participants') }}</div>
                                        <div class="b-text b-text_400 b-text_1.2em">
                                            {{ __('5. You will learn about 5 additional ways to promote the store on social networks') }}
                                        </div>
                                        <div class="b-text b-text_400 b-text_1.2em">
                                            {{ __('6. First leads, inquiries, and possibly the first sale') }}</div>
                                        <div class="b-text b-text_400 b-text_1.2em">
                                            {{ __('7. Fully packaged business and strategy for development') }}</div>
                                    </div>
                                </div>
                            </div>
                            <img loading="lazy" src="{{ URL::asset('assets/images/min-webp/deal-glasses.webp') }}" alt="deal-glasses" class="b-img b-img_v15 b-img_v15_1" type="image/webp">
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section class="b-section b-section_v3 b-section_visible pt-6">
            <div class="fade-in fade-in_v1 top"></div>
            <div class="container container_v2 mob">
                <div class="flex v">
                    <img loading="lazy" src="{{ URL::asset('assets/images/min-webp/star-sticker.webp') }}" alt="star-sticker" class="b-img b-img_v17">

                    <div class="b-text b-text_uppercase b-text_2.5em b-text_700 b-text_center b-text_fit m-auto mb-6r">
                        <span class="relative nowrap blue-marker">{{ __('With You') }}</span>
                        {{ __('Sharing Knowledge') }}
                    </div>

                    <div class="flex v gap_2 mob">
                        <div class="flex h gap_4 mob">

                            <div class="flex v w30 mob gap_2">

                                {{-- Swiper_v4 Lopd25 --}}
                                <div class="swiper-area relative">
                                    <div class="swiper swiper_v4 flex hidden">
                                        <div class="swiper-wrapper flex h">
                                            <div class="flex v swiper-slide">
                                                <div class="absolute bottom-0 left-0 b-text w b-text_2em b-text_lh-1em b-text_600 b-text_shadow4 b-text_uppercase ml-1.5">
                                                    {!! __('Daniil<br /> Shkitov') !!}
                                                </div>
                                                <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/author-img/3.jpg') }}" class="b-img b-img_v16 cursor_grab __slide-block mx-auto"
                                                    type="image/jpeg" alt="author-img-3">
                                            </div>

                                            <div class="flex v swiper-slide">
                                                <div class="absolute bottom-0 left-0 b-text w b-text_2em b-text_lh-1em b-text_600 b-text_shadow4 b-text_uppercase ml-1.5">
                                                    {!! __('Daniil<br /> Shkitov') !!}
                                                </div>
                                                <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/author-img/2.jpg') }}" class="b-img b-img_v16 cursor_grab __slide-block mx-auto"
                                                    type="image/jpeg" alt="author-img-2">
                                            </div>


                                            <div class="flex v swiper-slide">
                                                <div class="absolute bottom-0 left-0 b-text w b-text_2em b-text_lh-1em b-text_600 b-text_shadow4 b-text_uppercase ml-1.5">
                                                    {!! __('Daniil<br /> Shkitov') !!}
                                                </div>
                                                <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/author-img/1.jpg') }}" class="b-img b-img_v16 cursor_grab __slide-block mx-auto"
                                                    type="image/jpeg" alt="author-img-1">
                                            </div>

                                            <div class="flex v swiper-slide">
                                                <div class="absolute bottom-0 left-0 b-text w b-text_2em b-text_lh-1em b-text_600 b-text_shadow4 b-text_uppercase ml-1.5">
                                                    {!! __('Daniil<br /> Shkitov') !!}
                                                </div>
                                                <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/author-img/4.jpg') }}" class="b-img b-img_v16 cursor_grab __slide-block mx-auto"
                                                    type="image/jpeg" alt="author-img-4">
                                            </div>

                                            <div class="flex v swiper-slide">
                                                <div class="absolute bottom-0 left-0 b-text w b-text_2em b-text_lh-1em b-text_600 b-text_shadow4 b-text_uppercase ml-1.5">
                                                    {!! __('Daniil<br /> Shkitov') !!}
                                                </div>
                                                <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/author-img/5.jpg') }}" class="b-img b-img_v16 cursor_grab __slide-block mx-auto"
                                                    type="image/jpeg" alt="author-img-5">
                                            </div>

                                            <div class="flex v swiper-slide">
                                                <div class="absolute bottom-0 left-0 b-text w b-text_2em b-text_lh-1em b-text_600 b-text_shadow4 b-text_uppercase ml-1.5">
                                                    {!! __('Daniil<br /> Shkitov') !!}
                                                </div>
                                                <img loading="lazy" src="{{ URL::asset('assets/images/min-jpeg/author-img/6.jpg') }}" class="b-img b-img_v16 cursor_grab __slide-block mx-auto"
                                                    type="image/jpeg" alt="author-img-6">
                                            </div>
                                        </div>
                                        <div class="swiper-arrow swiper-button-next"></div>
                                        <div class="swiper-arrow swiper-button-prev"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex v w50 wmob space-btw">
                                <div class="flex v gap mb-2r">
                                    <div class="b-text b-text_1.5em b-text_400">
                                        {{ __('The club’s creator, supplier, and leader of the YouTube channel') }}
                                        <a target="_blank" href="https://www.youtube.com/@shkitov" class="mt-1">
                                            <img src="{{ URL::asset('assets/images/yt-logo.jpg') }}" alt="youtube-logo" class="b-img b-img_v21">
                                        </a>
                                    </div>
                                    <div class="b-text b-text_grey b-text_400">
                                        {{ __('Daniil personally shares all the information in the club in the form of texts, audio, and video content.') }}
                                    </div>
                                </div>

                                <div class="flex v">
                                    <div class="b-text b-text_1.5em b-text_500">
                                        <span class="b-text b-text_2em b-text_700">470</span> {{ __('graduates') }}
                                    </div>
                                    <div class="b-text b-text_1.5em b-text_500 mb-1r">
                                        <span class="b-text b-text_2em b-text_700">295,000</span> {{ __('subscribers') }}
                                    </div>
                                    <div class="flex gap-2 h">
                                        <div class="flex gap_05 h align">
                                            <img src="{{ URL::asset('assets/images/min-webp/instagram.webp') }}" alt="instagram" class="b-img">
                                            <a href="https://www.instagram.com/daniilshkit">daniilshkit</a>
                                        </div>
                                        <div class="flex gap_05 h align">
                                            <img src="{{ URL::asset('assets/images/min-webp/telegram.webp') }}" alt="telegram" class="b-img b-img_v1">
                                            <a href="https://t.me/daniilshkitov">daniilshkitov</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="b-section b-section_doted b-section_v5 b-section_visible">
            <div class="container container_v2 mob">

                <div class="h-text">
                    <div class="b-text b-text_uppercase b-text_fit-content b-text_2.5em b-text_700 b-text_center my-3 b-text_after-orator">
                        {{ __('Frequent') }}
                        <span class="relative nowrap blue-marker">{{ __('Questions') }}</span>
                    </div>
                </div>
                <div class="accordion-container">
                    <div class="divider"></div>
                    {{-- hook Gloof49_ck --}}
                    <div class="flex h gap mob accordion">
                        <div class="flex v w50 gap mob">
                            <div class="accordion-item">
                                <button id="accordion-button-1" aria-expanded="false">
                                    <span class="b-text b-text_2em fmob4">{{ __('How to pay?') }}</span>
                                    <span class="icon" aria-hidden="true"></span>
                                </button>
                                <div class="accordion-content">
                                    <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                        {!! __(
                                            'Choose a convenient payment method after completing your registration. You can pay for club access from any bank in Russia. *If you need to pay with a foreign card, please contact our customer care:',
                                        ) !!}
                                        <span>
                                            <a target="_blank" href="https://t.me/ClubStarthelp_bot">@ClubStarthelp_bot</a>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button id="accordion-button-2" aria-expanded="false">
                                    <span class="b-text b-text_2em fmob4">{{ __('What happens after payment?') }}</span>
                                    <span class="icon" aria-hidden="true"></span>
                                </button>
                                <div class="accordion-content">
                                    <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                        {!! __(
                                            'You will be redirected to your personal account where you will find a link to the private Telegram channel "START CLUB". Additionally, your personal account will have links to marathons, tables, club archives (showing our beginnings and what led to the current results), and other relevant links for productive work.',
                                        ) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button id="accordion-button-3" aria-expanded="false">
                                    <span class="b-text b-text_2em fmob4">{{ __('In which cities and countries can you operate?') }}</span>
                                    <span class="icon" aria-hidden="true"></span>
                                </button>
                                <div class="accordion-content">
                                    <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                        {!! __('We have an official agreement with a logistics company, so you can sell sneakers and participate in the club in any city worldwide.') !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button id="accordion-button-4" aria-expanded="false">
                                    <span class="b-text b-text_2em fmob4">{{ __('Are the sneakers genuine?') }}</span>
                                    <span class="icon" aria-hidden="true"></span>
                                </button>
                                <div class="accordion-content">
                                    <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                        {!! __('To fully address this question, I have recorded a detailed explanation.') !!}
                                    </div>
                                    <audio controls preload="none">
                                        <source src="{{ URL::asset('assets/audio/audio-are-genuine-sneakers.ogg') }}" type="audio/ogg">
                                        {{ __('Your browser does not support the audio element.') }}
                                    </audio>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button id="accordion-button-5" aria-expanded="false">
                                    <span class="b-text b-text_2em fmob4">{{ __('What is the essence of the club?') }}</span>
                                    <span class="icon" aria-hidden="true"></span>
                                </button>
                                <div class="accordion-content">
                                    <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                        {!! __(
                                            'In the club, you will have the opportunity to purchase sneakers at cost price starting from one pair. You will also be granted access to marketing content for websites and social media. Moreover, you will become part of a community of sneaker sellers and receive informational support, helping you avoid many mistakes at the start.',
                                        ) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button id="accordion-button-6" aria-expanded="false">
                                    <span class="b-text b-text_2em fmob4">{{ __('Is there a return policy?') }}</span>
                                    <span class="icon" aria-hidden="true"></span>
                                </button>
                                <div class="accordion-content">
                                    <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                        {!! __(
                                            'A return of sneakers is possible within 14 days. You or your client can return the sneakers to the warehouse and receive a refund. There are no refunds for the club membership. The service is considered provided from the moment of access.',
                                        ) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button id="accordion-button-7" aria-expanded="false">
                                    <span class="b-text b-text_2em fmob4">{{ __('Can you pay for the sneakers after receiving them?') }}</span>
                                    <span class="icon" aria-hidden="true"></span>
                                </button>
                                <div class="accordion-content">
                                    <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                        {!! __('Yes, when placing an order, you can specify that payment should be made after receiving the goods.') !!}
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="flex v w50 gap mob">

                            <div class="accordion-item">
                                <button id="accordion-button-8" aria-expanded="false">
                                    <span class="b-text b-text_2em fmob4">{{ __('Can sneakers be purchased by drop shipping without being in the club?') }}</span>
                                    <span class="icon" aria-hidden="true"></span>
                                </button>
                                <div class="accordion-content">
                                    <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                        {!! __('All club members benefit from low prices through drop shipping. You can gain access by paying a monthly membership fee.') !!}
                                        <br><br>
                                        {!! __('If you wish to place an order without being a club member, you will be charged the regular retail price, just like any other customer.') !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button id="accordion-button-9" aria-expanded="false">
                                    <span class="b-text b-text_2em fmob4">{{ __('If this is my first business, will I be able to understand everything?') }}</span>
                                    <span class="icon" aria-hidden="true"></span>
                                </button>
                                <div class="accordion-content">
                                    <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                        {!! __('Yes, I explain every step of setting up the store in simple terms. You do not need any special knowledge or experience; you will acquire it during the process.') !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button id="accordion-button-10" aria-expanded="false">
                                    <span class="b-text b-text_2em fmob4">{{ __('Where is the club located?') }}</span>
                                    <span class="icon" aria-hidden="true"></span>
                                </button>
                                <div class="accordion-content">
                                    <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                        {!! __('The club is located in a private Telegram channel. Communication in the club happens through text, circles, broadcasts, and voice messages, just like in real chats.') !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button id="accordion-button-11" aria-expanded="false">
                                    <span class="b-text b-text_2em fmob4">{{ __('What is drop shipping?') }}</span>
                                    <span class="icon" aria-hidden="true"></span>
                                </button>
                                <div class="accordion-content">
                                    <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                        {!! __(
                                            'Drop shipping is selling sneakers on order for a supplier. In the club, you can order sneakers for yourself or directly to your customers, and earn profits through transfers to your bank card.',
                                        ) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button id="accordion-button-12" aria-expanded="false">
                                    <span class="b-text b-text_2em fmob4">{{ __('How to extend/cancel the club subscription?') }}</span>
                                    <span class="icon" aria-hidden="true"></span>
                                </button>
                                <div class="accordion-content">
                                    <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                        {!! __('Payments will be automatically deducted from the card you used to pay for the club after successful payment.') !!}
                                        <br><br>
                                        {!! __('To cancel your subscription, log into your personal account, select the "Settings" section, go to the "Subscription" section, and then press "Cancel".') !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button id="accordion-button-13" aria-expanded="false">
                                    <span class="b-text b-text_2em fmob4">{{ __('How will I gain access, and what should I do if there are difficulties with payment or the club?') }}</span>
                                    <span class="icon" aria-hidden="true"></span>
                                </button>
                                <div class="accordion-content">
                                    <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                        {!! __('After payment, a personal account will be created for you containing all the necessary links for the Start Club.') !!}
                                        <br><br>
                                        *{!! __('You will be automatically redirected to your personal account after payment.') !!}
                                        <br><br>
                                        {!! __('If there are any difficulties, we will assist you. Contact our care department by stating the email used for payment. Support Telegram:') !!}
                                        <a href="https://t.me/ClubStarthelp_bot">@ClubStarthelp_bot</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="abs_blur_effect_custom"></div>
                <div class="abs_blur_effect_custom green"></div>
            </div>

            <div class="fade-in"></div>
        </section>



        {{-- hook QsAAi29_1x --}}
        {{-- <div id="video-intro">
        <div class="video-wrapper">
            @svg('red-cross', 'b-img b-img_remove')
            <div class="b-img b-img_remove v1">—</div>
            <video src="{{ URL::asset('assets/videos/camera.mp4') }}" autoplay muted loop>
            </video>
        </div>
    </div> --}}
        <footer class="modern-footer mt-6">
            <div class="container container_v2 mob my-3">
                <div class="b-text b-text_grey-dark b-text_center">
                    {{ __('Sole Proprietor Shkitov D. A. TIN: 7707083893') }}<br>
                    {{ __('Bank TIN: 7710140679') }}<br>
                    {{ __('OGRNIP: 322325600026496') }}<br>
                </div>
            </div>
        </footer>

    </div>

    <div class="modal-container">
        <div class="modal-background">
            <div class="modal">
                <!-- TO DO -->
            </div>
        </div>
    </div>

@endsection


{{-- preload --}}
@section('index-preload')
    <link rel="preload" fetchpriority="high" as="image" type="image/png" href="{{ URL::asset('assets/images/min-png/sneaker-in-motion.png') }}" />
    <link rel="preload" fetchpriority="high" as="image" type="image/png" href="{{ URL::asset('assets/images/min-png/shipping-box.png') }}" />
    <link rel="preload" fetchpriority="high" as="image" type="image/png" href="{{ URL::asset('assets/images/min-png/shipping-box-cut.png') }}" />
@stop

{{-- styles --}}
@section('index-styles')
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/styles/index/accordion.css') }}">
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/styles/index/swiper.css') }}">
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/styles/index/telegram-circle-video.css') }}">
    <link fetchpriority="low" type="text/css" rel="stylesheet" href="{{ Vite::asset('resources/styles/index/modals.css') }}">
@stop

{{-- javascript --}}
@section('index-script')
    <script src="{{ Vite::asset('resources/javascript/global/main.js') }}"></script>
    <script src="{{ Vite::asset('resources/javascript/index/accordion.js') }}"></script>
    <script src="{{ Vite::asset('resources/javascript/index/hooks.js') }}"></script>
    <script src="{{ Vite::asset('resources/javascript/index/modules/sneaker.js') }}" type="module"></script>
    <script src="{{ Vite::asset('resources/javascript/index/modules/swiper.js') }}" type="module"></script>
    <script src="{{ Vite::asset('resources/javascript/index/telegram-circle-video.js') }}"></script>
    <script src="{{ Vite::asset('resources/javascript/index/modals.js') }}"></script>
@stop
