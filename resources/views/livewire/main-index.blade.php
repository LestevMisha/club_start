<div>

    {{-- <section class="b-section b-section_hidden b-section_v1">
        <div class="container container_v2 mob">
            <div class="container container_v1">
                <div class="flex v h100">
                    <div class="flex v mt-4">

                        <div class="h-text h-text_main-header">
                            <div class="b-text b-text_3.5em b-text_900 b-text_center b-text_grey b-text_lh-1em">
                                КЛУБ
                            </div>
                            <div class="glitch-wrapper">
                                <div data-text="START" class="b-text b-text_4.5em b-text_900 b-text_center glitch">
                                    START
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="b-text b-text_1.3em b-text_center mt-2">
                        Закрытый клуб для продаж <br>кроссовок по дропшиппингу
                    </div>
                    <!-- <div class="flex fit gap-05 v mt-2 m-auto">
                        <div class="flex gap h align">
                            <x-svg class="b-img b-img_v1" svg="CheckCircle" />
                            <div class="b-text b-text_1.3em b-text_700">Без опыта</div>
                        </div>
                        <div class="flex gap h align">
                            <x-svg class="b-img b-img_v1" svg="CheckCircle" />
                            <div class="b-text b-text_1.3em b-text_700">Без склада</div>
                        </div>
                        <div class="flex gap h align">
                            <x-svg class="b-img b-img_v1" svg="CheckCircle" />
                            <div class="b-text b-text_1.3em b-text_700">Без сотрудников</div>
                        </div>
                        <div class="flex gap h align">
                            <x-svg class="b-img b-img_v1" svg="CheckCircle" />
                            <div class="b-text b-text_1.3em b-text_700">Без вложений в товар</div>
                        </div>
                    </div> -->
                    <div class="card mt-2">
                        <div class="b-text b-text_1.3em b-text_center">
                            Ежемесечная подписка на<br>"КЛУБ START"
                        </div>
                        <div class="b-text b-text_grey b-text_center">Вход: 6 000 рублей</div>
                        <a class="go-button v2" href="{{ route('register') }}">Вступить в Клуб</a>
                    </div>
                </div>
            </div>
            <div id="anchor">
            </div>

        </div>
        <img id="optimize_LCP-mobile" src="{{ URL::asset('images/min-png/sneakers-chair-extromin.png') }}"
            class="b-img b-img_v2" alt="sneakers-chair">
        <div class="overlay"></div>
    </section> --}}

    <section class="b-section b-section_visible b-section_v1 pt-6 pb-12">
        <div class="container container_v2 mob">
            <div class="flex h reverse_mob">
                <div id="custom_mobile" class="flex v w70 z-2 wmob mb-6">
                        <img class="b-img b-img_logo mb-4" src="{{ URL::asset('images/logo.png') }}" alt="logo">

                        <div class="b-text b-text_v5 mb-1">ОНЛАЙН-ДОСТУП</div>

                    <div class="b-text b-text_4.5em b-text_lh-1 b-text_700 mb-2r">Дропшиппинг
                        <img class="b-img b-img_open-book floating" src="{{ URL::asset('images/min-png/money-sticker.png') }}"
                            alt="open-book">
                        на кроссовках
                        <span class="b-text b-text_grey modeLight_darker span_custom">Всего в 1 клик</span>
                    </div>

                    <div class="b-text b-text_400 b-text_1.5em mb-2">
                        Начни зарабатывать без опыта, склада,
                        <br>
                        сотрудников или вложений в товар
                    </div>

                    <div class="flex h gap_2 align mob">


                        <a class="go-button v7" href="{{ route('register') }}">
                            Вступить в Клуб
                            <img class="b-img b-img_finger-click" src="{{ URL::asset('images/finger-click.png') }}"
                                alt="finger-click">
                        </a>

                        <div class="hblock hblock_center hblock_gap">
                            <img class="b-img b-img_face" src="{{ URL::asset('images/face.png') }}" alt="face">
                            <div class="b-text b-text_400 b-text_grey modeLight_darker">Ежемесечная подписка<br> за 6 000
                                рублей</div>
                        </div>
                    </div>
                </div>
                <div class="flex v w30 wmob">
                    <div class="blue-light"></div>
                    <div id="anchor" class="z-1">
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>


    <section class="b-section b-section_visible pb-2">

        <div class="container container_v2 mob">

            <div class="h-text mb-3">
                {{-- <div
                    class="b-text b-text_2.5em b-text_fit b-text_700 b-text_center b-text_v2 b-text_blue-marker b-text_blue-marker_v3">
                    УЧАСТНИКАМ КЛУБА<br>ПРЕДОСТАВЛЯЕТСЯ
                </div> --}}
                <div
                    class="b-text b-text_2.5em b-text_fit b-text_700 b-text_center b-text_blue-marker b-text_blue-marker_v3">
                    УЧАСТНИКАМ КЛУБА<br><span
                        class="b-text b-text_grey-dark b-text_400 b-text_08">ПРЕДОСТАВЛЯЕТСЯ</span>
                </div>
            </div>

            <div class="flex v gap mob">

                <div class="flex h gap mob">
                    <div class="flex w50 h base wmob">
                        <div class="b-text b-text_2em b-text_700 mr-2"><span class="blue-circle-offset"></span>1
                        </div>
                        <div class="b-text b-text_1.3em">Доставляем кроссовки от 1 пары - дропшиппинг.</div>
                    </div>
                    <div class="flex w50 h base wmob">
                        <div class="b-text b-text_2em b-text_700 mr-2"><span class="blue-circle-offset"></span>2
                        </div>
                        <div class="b-text b-text_1.3em">Отправка кроссовок доступна из двух мест - Краснодар и Москва.
                        </div>
                    </div>
                </div>

                <div class="flex h gap mob">
                    <div class="flex w50 h base wmob">
                        <div class="b-text b-text_2em b-text_700 mr-2"><span class="blue-circle-offset"></span>3
                        </div>
                        <div class="b-text b-text_1.3em">610 моделей кроссовок в ассортименте.</div>
                    </div>
                    <div class="flex w50 h base wmob">
                        <div class="b-text b-text_2em b-text_700 mr-2"><span class="blue-circle-offset"></span>4
                        </div>
                        <div class="b-text b-text_1.3em">Создаем контент для социальных сетей с нашими кроссовками.
                        </div>
                    </div>
                </div>

                <div class="flex h gap mob">
                    <div class="flex w50 h base wmob">
                        <div class="b-text b-text_2em b-text_700 mr-2"><span class="blue-circle-offset"></span>5
                        </div>
                        <div class="b-text b-text_1.3em">Фотографии кроссовок без водяных знаков в оригинальном
                            качестве.
                        </div>
                    </div>
                    <div class="flex w50 h base wmob">
                        <div class="b-text b-text_2em b-text_700 mr-2"><span class="blue-circle-offset"></span>6
                        </div>
                        <div class="b-text b-text_1.3em">Эффективные методы продвижения обуви с опытным таргетологом.
                        </div>
                    </div>
                </div>

                <div class="flex h gap mob">
                    <div class="flex w50 h base wmob">
                        <div class="b-text b-text_2em b-text_700 mr-2"><span class="blue-circle-offset"></span>7
                        </div>
                        <div class="b-text b-text_1.3em">Отслеживание моделей на складе - таблица с размерами.</div>
                    </div>
                    <div class="flex w50 h base wmob">
                        <div class="b-text b-text_2em b-text_700 mr-2"><span class="blue-circle-offset"></span>8</div>
                        <div class="b-text b-text_1.3em">Закрытое сообщество в Телеграме для наших клиентов.</div>
                    </div>
                </div>

            </div>


            <div class="flex h gap-2 mt-2 reverse_mob">
                <div class="card card_blue card_v1 mob" id="custom-target-01">
                    <div class="b-text b-text_1.5em b-text_700 b-text_center">РАБОТА<br>В РАМКАХ КЛУБА</div>
                    <div class="flex v gap my-1">
                        <div class="flex h">
                            <div class="b-text b-text_nowrap">0 руб</div>
                            <span class="border-dot"></span>
                            <div class="b-text b-text_nowrap">Аренда склада</div>
                        </div>
                        <div class="flex h space-btw">
                            <div class="b-text b-text_nowrap">0 руб</div>
                            <span class="border-dot"></span>
                            <div class="b-text b-text_nowrap">Зарплата сотрудникам</div>
                        </div>
                        <div class="flex h space-btw">
                            <div class="b-text b-text_nowrap">0 руб</div>
                            <span class="border-dot"></span>
                            <div class="b-text b-text_nowrap">Вложения в товар</div>
                        </div>
                        <div class="flex h space-btw">
                            <div class="b-text b-text_nowrap">6 000 руб</div>
                            <span class="border-dot"></span>
                            <div class="b-text b-text_nowrap">Оплата клуба</div>
                        </div>
                    </div>
                    <a class="go-button go-button_hover v2 v5" href="{{ route('register') }}">
                        Вступить в Клуб
                    </a>
                    <img src="{{ URL::asset('images/min-png/cursor.png') }}" class="b-img b-img_v9" alt="cursor"
                        loading="lazy">
                    <img src="{{ URL::asset('images/min-png/thumb-up.png') }}" class="b-img b-img_v4" alt="thumb-up"
                        loading="lazy">
                </div>
                <div class="card card_v1 card_v1-danger mob">
                    <div class="b-text b-text_1.5em b-text_700 b-text_center">РАБОТА<br> САМОСТОЯТЕЛЬНО</div>
                    <div class="flex v gap my-1">
                        <div class="flex h">
                            <div class="b-text b-text_nowrap">50 000 руб</div>
                            <span class="border-dot"></span>
                            <div class="b-text b-text_nowrap">Аренда склада</div>
                        </div>
                        <div class="flex h space-btw">
                            <div class="b-text b-text_nowrap">90 000 руб</div>
                            <span class="border-dot"></span>
                            <div class="b-text b-text_nowrap">Зарплата сотрудникам</div>
                        </div>
                        <div class="flex h space-btw">
                            <div class="b-text b-text_nowrap">3 500 000 руб</div>
                            <span class="border-dot"></span>
                            <div class="b-text b-text_nowrap">Вложения в товар</div>
                        </div>
                        <div class="flex h space-btw">
                            <div class="b-text b-text_nowrap">30 000 руб</div>
                            <span class="border-dot"></span>
                            <div class="b-text b-text_nowrap">Расходы на съемку</div>
                        </div>
                    </div>
                    <div class="b-text b-text_1.3em b-text_700">Итого: 3 770 000 руб.</div>
                    <img src="{{ URL::asset('images/svg/img-case/RedCross.svg') }}" class="b-img b-img_cross-thick"
                        alt="RedCross" loading="lazy">
                </div>
            </div>
        </div>

    </section>


    <section class="b-section b-section_v2 b-section_visible pt-6">
        <div class="container container_v2 mob">

            <div class="h-text h-text_mob mb-2r">
                <div class="b-text b-text_fit b-text_2.5em b-text_700 b-text_center">
                    КЛУБ ТОЧНО ДЛЯ ТЕБЯ, ЕСЛИ
                </div>
            </div>

            <div class="flex v">
                <div class="flex h gap_2 gmob-1 align mb-3r w70 wmob mb-3r_2xmob">
                    <div class="b-text b-text_5em b-text_900 b-text_blue b-text_lh-1em b-text_fith">1</div>
                    <div class="b-text b-text_1.5em b-text_400 fmob3">
                        Ты хочешь открыть свой собственный бизнес не выходя из дома
                    </div>
                </div>

                <div wire:ignore class="flex space-btw h mob gap_2 slider_v3 video-slider">
                    <div class="flex v mobalign w100 mob">
                        <div class="flex v hmin6 mb-1r __text-block">
                            <div class="b-text tcmob b-text_1.5em b-text_600 mb-05">
                                Фото поставок
                            </div>
                            <div class="b-text tcmob b-text_400 b-text_grey">
                                Мы сами снимаем кроссовки на складе и загружаем фотографии в специальную папку для
                                партнеров.
                            </div>
                        </div>
                        <video class="b-video b-video_v2 __slide-block" muted controls preload="none"
                            poster="{{ URL::asset('images/min-jpeg/block-1/1.jpeg') }}">
                            <source src="{{ URL::asset('videos/block-1/1.mp4') }}" type="video/mp4">
                        </video>
                    </div>

                    <div class="flex v mobalign w100 mx-2.5 mx-2.5_mob">
                        <div class="flex v hmin6 mb-1r __text-block">
                            <div class="b-text tcmob b-text_1.5em b-text_600 mb-05">
                                Контент с кроссовками
                            </div>
                            <div class="b-text tcmob b-text_400 b-text_grey">
                                Каждый сезон мы арендовываем студию, приглашаем моделей и создаем контент для вашего
                                магазина.
                            </div>
                        </div>
                        <video class="b-video b-video_v2 __slide-block" muted controls preload="none"
                            poster="{{ URL::asset('images/min-jpeg/block-1/2.jpeg') }}">
                            <source src="{{ URL::asset('videos/block-1/2.mp4') }}" type="video/mp4">
                        </video>
                    </div>

                    <div class="flex v mobalign w100 mob">
                        <div class="flex v hmin6 mb-1r __text-block">
                            <div class="b-text tcmob b-text_1.5em b-text_600 mb-05">
                                Доставка товара
                            </div>
                            <div class="b-text tcmob b-text_400 b-text_grey">
                                Отправка кроссовок клиентам, осуществляется с нашего склада, нашими сотрудниками.
                            </div>
                        </div>
                        <video class="b-video b-video_v2  __slide-block" muted controls preload="none"
                            poster="{{ URL::asset('images/min-jpeg/block-1/3.jpeg') }}">
                            <source src="{{ URL::asset('videos/block-1/3.mp4') }}" type="video/mp4">
                        </video>
                    </div>

                </div>
            </div>
            <svg class="b-img b-img_v23" xmlns="http://www.w3.org/2000/svg" width="1237" height="1934"
                viewBox="0 0 1237 1934" fill="none">
                <g filter="url(#a)">
                    <path
                        d="M589.499 410.171C805.886 599.23 959.96 1016.35 933.701 1341.93s-147.497 387.5-270.86 138.34c-123.362-249.15-277.49-666.323-344.307-931.86s54.789-327.091 270.965-138.239"
                        fill="#0d6efd" />
                </g>
                <defs>
                    <filter id="a" x=".203" y=".719" width="1236.41" height="1932.42"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                        <feGaussianBlur stdDeviation="150" result="effect1_foregroundBlur_801_1814" />
                    </filter>
                </defs>
            </svg>
        </div>
        <div class="bg_noise"></div>
        <div class="fade-in fade-in_v1 top"></div>

    </section>

    <section class="b-section b-section_v2 b-section_hidden pt-12">

        <img src="{{ URL::asset('images/dan-6.png') }}" class="b-img b-img_v19" type="image/jpeg" alt="sn1"
            loading="lazy" id="responsive-img">
        <script>
            function switchImageBasedOnWidth() {
                const imgElement = document.getElementById('responsive-img');
                const screenWidth = window.innerWidth;

                if (screenWidth < 1250) {
                    imgElement.src = "{{ URL::asset('images/dan-6.png') }}";
                } else {
                    imgElement.src = "{{ URL::asset('images/dan-5.png') }}";
                }
            }

            // Initial check
            switchImageBasedOnWidth();

            // Add event listener for window resize
            window.addEventListener('resize', switchImageBasedOnWidth);
        </script>
        {{-- <div class="shaped_angle_background">
            <div id="globe" class="cursor_grab">
            </div>
        </div> --}}

        <div class="container container_v2 custom_blur_103xd mob">
            <div class="flex v">
                <div class="flex w70 v mob gap fcmob">

                    <div class="flex h gap_2 mb-1r">
                        <div class="b-text b-text_5em b-text_blue b-text_900 b-text_lh-1em">2</div>

                        <div class="b-text b-text_1.5em b-text_400 my-auto fmob3">
                            Нет денег для вложений в товар
                        </div>
                    </div>
                    <i class="arrow-icon v1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="66" viewBox="0 0 52 66"
                            fill="none" class="create__author-decor">
                            <path
                                d="M9.55808 1.94398C9.86242 1.48312 9.73554 0.862801 9.27467 0.558458C8.81381 0.254114 8.19349 0.380998 7.88915 0.841859L9.55808 1.94398ZM51.0109 58.1824C51.3331 57.7339 51.2308 57.109 50.7823 56.7868L43.4732 51.5353C43.0247 51.213 42.3999 51.3154 42.0776 51.7639C41.7554 52.2124 41.8577 52.8373 42.3062 53.1595L48.8032 57.8275L44.1352 64.3244C43.8129 64.7729 43.9153 65.3978 44.3638 65.72C44.8123 66.0423 45.4371 65.9399 45.7594 65.4914L51.0109 58.1824ZM5.52176 4.87913C5.26853 5.36994 5.46113 5.9731 5.95194 6.22632C6.44275 6.47955 7.04591 6.28695 7.29914 5.79614L5.52176 4.87913ZM4.13265 14.1002C4.26911 13.5651 3.94589 13.0206 3.41073 12.8842C2.87557 12.7477 2.33111 13.0709 2.19466 13.6061L4.13265 14.1002ZM0.979276 22.881C0.974428 23.4333 1.4182 23.8849 1.97046 23.8898C2.52272 23.8946 2.97435 23.4509 2.9792 22.8986L0.979276 22.881ZM4.01437 31.6961C3.88025 31.1604 3.33721 30.8348 2.80146 30.9689C2.26571 31.103 1.94012 31.646 2.07424 32.1818L4.01437 31.6961ZM5.53095 40.8953C5.80145 41.3768 6.41107 41.5478 6.89258 41.2773C7.37409 41.0068 7.54514 40.3972 7.27464 39.9157L5.53095 40.8953ZM12.6104 46.9574C12.2199 46.5668 11.5867 46.5667 11.1961 46.9572C10.8056 47.3476 10.8054 47.9808 11.1959 48.3714L12.6104 46.9574ZM18.6503 54.0529C19.1297 54.3272 19.7407 54.1609 20.0149 53.6815C20.2892 53.2022 20.1229 52.5912 19.6435 52.317L18.6503 54.0529ZM27.8243 55.743C27.2934 55.5908 26.7396 55.8978 26.5874 56.4287C26.4352 56.9596 26.7422 57.5134 27.2731 57.6656L27.8243 55.743ZM36.4566 59.2799C37.0073 59.3214 37.4874 58.9085 37.5288 58.3578C37.5703 57.8071 37.1574 57.327 36.6067 57.2856L36.4566 59.2799ZM45.5648 57.1856C45.0148 57.236 44.6098 57.7227 44.6602 58.2727C44.7107 58.8227 45.1974 59.2277 45.7474 59.1772L45.5648 57.1856ZM7.88915 0.841859C7.01557 2.16471 6.22682 3.51256 5.52176 4.87913L7.29914 5.79614C7.97121 4.49353 8.72371 3.20745 9.55808 1.94398L7.88915 0.841859ZM2.19466 13.6061C1.40719 16.6945 1.00625 19.8081 0.979276 22.881L2.9792 22.8986C3.00475 19.9878 3.38457 17.0342 4.13265 14.1002L2.19466 13.6061ZM2.07424 32.1818C2.83752 35.2308 3.99467 38.1606 5.53095 40.8953L7.27464 39.9157C5.82721 37.3392 4.73527 34.5758 4.01437 31.6961L2.07424 32.1818ZM11.1959 48.3714C13.3584 50.5345 15.8482 52.4498 18.6503 54.0529L19.6435 52.317C16.9949 50.8017 14.6468 48.9945 12.6104 46.9574L11.1959 48.3714ZM27.2731 57.6656C30.1268 58.4837 33.1911 59.0341 36.4566 59.2799L36.6067 57.2856C33.471 57.0495 30.5414 56.522 27.8243 55.743L27.2731 57.6656ZM45.7474 59.1772C47.252 59.0393 48.7899 58.843 50.3604 58.5857L50.0371 56.612C48.512 56.8619 47.021 57.0521 45.5648 57.1856L45.7474 59.1772Z"
                                fill="#0d6efd"></path>
                        </svg>
                    </i>
                    <div class="b-text b-text_1.3em b-text_lh-1.5em b-text_400 tcmob fmob1 mb-2r">
                        Вкладывать деньги в товар — не нужно!
                        Благодаря большому количеству портнеров в «КЛУБ START» у нас есть возможность приобретать самые
                        востребованные кроссовки.
                    </div>

                </div>

                <div class="flex v">

                    {{-- <div class="flex v align mb-2r">
                        <div
                            class="b-text b-text_fit b-text_2.5em b-text_700 b-text_blue-marker b-text_blue-marker_v2 custom_media_size_change">
                            ПРАЙС-ЛИСТ
                        </div>
                    </div> --}}

                    <div wire:ignore class="slider_v1 video-slider">
                        <img src="{{ URL::asset('images/min-jpeg/price-list/2.JPG') }}"
                            class="b-img b-img_v5 cursor_grab __slide-block mx-2.5 mx-2.5_mob" type="image/jpeg"
                            alt="sn1" loading="lazy">

                        <img src="{{ URL::asset('images/min-jpeg/price-list/3.JPG') }}"
                            class="b-img b-img_v5 cursor_grab __slide-block mx-2.5 mx-2.5_mob" type="image/jpeg"
                            alt="sn1" loading="lazy">

                        <img src="{{ URL::asset('images/min-jpeg/price-list/4.JPG') }}"
                            class="b-img b-img_v5 cursor_grab __slide-block mx-2.5 mx-2.5_mob" type="image/jpeg"
                            alt="sn1" loading="lazy">

                        <img src="{{ URL::asset('images/min-jpeg/price-list/5.JPG') }}"
                            class="b-img b-img_v5 cursor_grab __slide-block mx-2.5 mx-2.5_mob" type="image/jpeg"
                            alt="sn1" loading="lazy">

                        <img src="{{ URL::asset('images/min-jpeg/price-list/6.JPG') }}"
                            class="b-img b-img_v5 cursor_grab __slide-block mx-2.5 mx-2.5_mob" type="image/jpeg"
                            alt="sn1" loading="lazy">

                        <img src="{{ URL::asset('images/min-jpeg/price-list/7.JPG') }}"
                            class="b-img b-img_v5 cursor_grab __slide-block mx-2.5 mx-2.5_mob" type="image/jpeg"
                            alt="sn1" loading="lazy">

                        <img src="{{ URL::asset('images/min-jpeg/price-list/8.JPG') }}"
                            class="b-img b-img_v5 cursor_grab __slide-block mx-2.5 mx-2.5_mob" type="image/jpeg"
                            alt="sn1" loading="lazy">

                        <img src="{{ URL::asset('images/min-jpeg/price-list/9.JPG') }}"
                            class="b-img b-img_v5 cursor_grab __slide-block mx-2.5 mx-2.5_mob" type="image/jpeg"
                            alt="sn1" loading="lazy">

                        <img src="{{ URL::asset('images/min-jpeg/price-list/10.JPG') }}"
                            class="b-img b-img_v5 cursor_grab __slide-block mx-2.5 mx-2.5_mob" type="image/jpeg"
                            alt="sn1" loading="lazy">

                        <img src="{{ URL::asset('images/min-jpeg/price-list/11.JPG') }}"
                            class="b-img b-img_v5 cursor_grab __slide-block mx-2.5 mx-2.5_mob" type="image/jpeg"
                            alt="sn1" loading="lazy">

                        <img src="{{ URL::asset('images/min-jpeg/price-list/12.JPG') }}"
                            class="b-img b-img_v5 cursor_grab __slide-block mx-2.5 mx-2.5_mob" type="image/jpeg"
                            alt="sn1" loading="lazy">

                        <img src="{{ URL::asset('images/min-jpeg/price-list/13.JPG') }}"
                            class="b-img b-img_v5 cursor_grab __slide-block mx-2.5 mx-2.5_mob" type="image/jpeg"
                            alt="sn1" loading="lazy">

                        <img src="{{ URL::asset('images/min-jpeg/price-list/14.JPG') }}"
                            class="b-img b-img_v5 cursor_grab __slide-block mx-2.5 mx-2.5_mob" type="image/jpeg"
                            alt="sn1" loading="lazy">

                        <img src="{{ URL::asset('images/min-jpeg/price-list/15.JPG') }}"
                            class="b-img b-img_v5 cursor_grab __slide-block mx-2.5 mx-2.5_mob" type="image/jpeg"
                            alt="sn1" loading="lazy">

                        <img src="{{ URL::asset('images/min-jpeg/price-list/16.JPG') }}"
                            class="b-img b-img_v5 cursor_grab __slide-block mx-2.5 mx-2.5_mob" type="image/jpeg"
                            alt="sn1" loading="lazy">

                        <img src="{{ URL::asset('images/min-jpeg/price-list/17.JPG') }}"
                            class="b-img b-img_v5 cursor_grab __slide-block mx-2.5 mx-2.5_mob" type="image/jpeg"
                            alt="sn1" loading="lazy">

                        <img src="{{ URL::asset('images/min-jpeg/price-list/1.JPG') }}"
                            class="b-img b-img_v5 cursor_grab __slide-block mx-2.5 mx-2.5_mob" type="image/jpeg"
                            alt="sn1" loading="lazy">
                    </div>

                </div>
            </div>
        </div>
        <div class="bg_noise"></div>

    </section>

    <section class="b-section b-section_v2">
        <div class="container container_v2 mob">


            <div class="flex v my-6">

                <div class="flex w70 wmob mb-2r">


                    <div class="flex v gap mb-1r">

                        <div class="flex h gap_2">
                            <div class="b-text b-text_5em b-text_blue b-text_900 b-text_lh-1em">3</div>

                            <div class="b-text b-text_1.5em b-text_400 my-auto fmob3">
                                Не знаешь какой бизнес открыть, чтобы заработать в первые 3 дня
                            </div>
                        </div>
                        <div class="b-text b-text_grey b-text_1.3em b-text_400 fmob1">
                            Бизнес на кроссах окупается с первой же продажи!
                        </div>
                    </div>
                </div>

                <div class="flex h gap_2 mob">
                    <img id="banknote" src="{{ URL::asset('images/min-png/money-sticker.png') }}"
                        class="b-img b-img_v4 v4_0" alt="banknote" loading="lazy">

                    <div class="flex h gap_2 slight-bg mob">


                        <div class="flex w50 v gap_2 mob">
                            <div class="slidecontainer">
                                <div class="flex h space-btw gap_2 mob mb-2r">
                                    <div class="b-text b-text_1.3em">Кол-во подписчиков в вашем магазине</div>
                                    <div class="b-text b-text_1.3em b-text_nowrap b-text_v4 b-text_fith w"
                                        id="subs-value"></div>
                                </div>
                                <input type="range" min="1" max="500" value="100" class="slider"
                                    id="subs">
                            </div>

                            <div class="slidecontainer">
                                <div class="flex h space-btw gap_2 mob mb-2r">
                                    <div class="b-text b-text_1.3em">Накрутка на пару</div>
                                    <div class="b-text b-text_1.3em b-text_nowrap b-text_v4 b-text_fith w"
                                        id="add-price-value">
                                    </div>
                                </div>
                                <input type="range" min="1000" max="5000" value="1000" class="slider"
                                    id="add-price">
                            </div>
                        </div>

                        <div class="flex w50 v gap_2 mob">
                            <div class="flex v gap_2">
                                <div class="b-text b-text_1.3em b-text_400">Вы заработаете в месяц со своего магазина
                                </div>
                                <div class="b-text b-text_1.3em">От: <span id="min-result"></div>
                                <div class="b-text b-text_1.3em">До: <span id="max-result"></div>
                                <div class="b-text b-text_grey-dark">
                                    Расчёты основаны на средней (от 0,5% до 3%) конверсии подписчиков в клиентов.
                                    Конверсия зависит от упоковки магазина, платежеспособности аудитории и как долго
                                    работает магазин.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <script>
                var subsSlider = document.getElementById("subs");
                var addPriceSlider = document.getElementById("add-price");
                var addValue = document.getElementById("add-price-value");
                var subsValue = document.getElementById("subs-value");
                var banknote = document.getElementById("banknote");

                var minResult = document.getElementById("min-result");
                var maxResult = document.getElementById("max-result");

                subsValue.innerHTML = subsSlider.value + '  человек';
                addValue.innerHTML = (addPriceSlider.value).toLocaleString('ru-RU') + ' рублей';

                minResult.textContent = (parseInt(subsSlider.value) * 0.005 * parseInt(addPriceSlider.value)).toLocaleString(
                        'ru-RU') +
                    ' рублей';
                maxResult.textContent = (parseInt(subsSlider.value) * 0.03 * parseInt(addPriceSlider.value)).toLocaleString(
                        'ru-RU') +
                    ' рублей';

                addPriceSlider.oninput = function() {
                    addValue.innerHTML = (this.value).toLocaleString('ru-RU') + ' рублей';
                    minResult.textContent = (parseInt(subsSlider.value) * 0.005 * parseInt(addPriceSlider.value))
                        .toLocaleString(
                            'ru-RU') + ' рублей';
                    maxResult.textContent = (parseInt(subsSlider.value) * 0.03 * parseInt(addPriceSlider.value)).toLocaleString(
                        'ru-RU') + ' рублей';
                    banknote.style.opacity = 0.7;
                };

                subsSlider.oninput = function() {
                    subsValue.innerHTML = this.value + " человек";
                    minResult.textContent = (parseInt(subsSlider.value) * 0.005 * parseInt(addPriceSlider.value))
                        .toLocaleString(
                            'ru-RU') + ' рублей';
                    maxResult.textContent = (parseInt(subsSlider.value) * 0.03 * parseInt(addPriceSlider.value)).toLocaleString(
                        'ru-RU') + ' рублей';
                    banknote.style.opacity = 0.7;
                };

                addPriceSlider.onchange = function() {
                    banknote.style.opacity = 0.2;
                };

                subsSlider.onchange = function() {
                    banknote.style.opacity = 0.2;
                };
            </script>


        </div>
        <div class="bg_noise"></div>
        <div class="fade-in"></div>

    </section>


    {{-- <section class="b-section pt-6">

        <div class="container container_v2 mob">
            <div class="flex v">

                <div class="h-text">
                    <div
                        class="b-text b-text_fit-content b-text_2em b-text_700 b-text_center custom_media_size_change b-text_blue-marker b-text_blue-marker_v4 mb-1r">
                        СОЗДАЕМ
                        <span class="relative nowrap blue-marker trand">ТРЭНД</span>
                        В ЭТОЙ НИШЕ
                    </div>
                </div>
                <div class="b-text b-text_1.5em b-text_400 b-text_center fmob1 mb-6r">
                    Наша цель — чтобы каждый получил выгоду от продукта и эффективно продавал его.<br>
                    По этому мы на шаг впереди и у нас есть:
                </div>

                <div class="flex v gap_2">

                    <svg class="b-img b-img_v24" width="453" height="283" viewBox="0 0 453 283" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_1_36" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                            width="453" height="283">
                            <path
                                d="M98.5 124.873C186.5 62.3725 189 124.873 260 124.873C331 124.873 410.5 -0.499997 434 0.872539C457.5 2.24507 460 26.2451 434 50.3725C408 74.5 324 147.373 264 152.873C204 158.373 173.859 114.824 133 140.5C92.1414 166.176 72.5 247.5 57 266.873C41.5 286.245 14.9999 288.745 3.49997 266.873C-7.99999 245 10.5 187.373 98.5 124.873Z"
                                fill="#FF0000" />
                        </mask>
                        <g mask="url(#mask0_1_36)">
                            <g filter="url(#filter0_f_1_36)">
                                <path d="M161.5 59L234.679 161.75H88.3209L161.5 59Z" fill="#1CFFA0" />
                                <circle cx="261" cy="128" r="85" fill="#0047FF" />
                                <rect x="359" y="-22" width="94" height="164" fill="#00FF1A" />
                                <ellipse cx="358.5" cy="97.5" rx="24.5" ry="29.5"
                                    fill="#23BDFF" />
                                <rect x="-9" y="77" width="139" height="302" fill="#773FEF" />
                            </g>
                        </g>
                        <defs>
                            <filter id="filter0_f_1_36" x="-73" y="-86" width="590" height="529"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                    result="shape" />
                                <feGaussianBlur stdDeviation="32" result="effect1_foregroundBlur_1_36" />
                            </filter>
                        </defs>
                    </svg>


                    <div class="flex h gap_2 mob">

                        <div class="flex h gap w50 wmob">
                            <img src="{{ URL::asset('images/min-jpeg/trand-niche-img/1-items-table.jpg') }}"
                                alt="account" class="b-img b-img_full b-img_bordered b-img_v22">

                            <div class="flex v gap w65">
                                <div class="b-text b-text_1.5em">1. Заголовок</div>
                                <div class="b-text b-text_grey b_text-1.3em b-text_400">
                                    Удобная таблица с актуальными размерами кроссовок
                                    на складе
                                </div>
                            </div>
                        </div>

                        <div class="flex h gap w50 wmob">
                            <img src="{{ URL::asset('images/min-jpeg/trand-niche-img/2-account-screen.jpg') }}"
                                alt="account" class="b-img b-img_full b-img_bordered b-img_v22">
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
                            <img src="{{ URL::asset('images/min-jpeg/trand-niche-img/3-video-lessons.jpg') }}"
                                alt="account" class="b-img b-img_full b-img_bordered b-img_v22">
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
                                    Мы заключили официальный договор со СДЭК. Как юридическое лицо, отправка товаров нам
                                    обходится вдвое дешевле, чем частным лицам
                                </div>
                            </div>
                            <div class="flex img_flex_overflow_preventor h gap_2">
                                <img src="{{ URL::asset('images/min-jpeg/trand-niche-img/4-SDEK/header.jpg') }}"
                                    alt="account" class="b-img b-img_full b-img_bordered b-img_v22 v22.1">
                                <img src="{{ URL::asset('images/min-jpeg/trand-niche-img/4-SDEK/body.jpg') }}"
                                    alt="account" class="b-img b-img_full b-img_bordered b-img_v22 v22.1">
                                <img src="{{ URL::asset('images/min-jpeg/trand-niche-img/4-SDEK/footer.jpg') }}"
                                    alt="account" class="b-img b-img_full b-img_bordered b-img_v22 v22.1">
                            </div>
                        </div>

                    </div>


                    <div class="flex h gap_2 mob">

                        <div class="flex h gap w50 wmob">
                            <img src="{{ URL::asset('images/min-jpeg/trand-niche-img/5-track-code.jpg') }}"
                                alt="account" class="b-img b-img_full b-img_bordered b-img_v22">
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
                            <img src="{{ URL::asset('images/min-jpeg/trand-niche-img/6-referral-link.jpg') }}"
                                alt="account" class="b-img b-img_full b-img_bordered b-img_v22">
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
                            <img src="{{ URL::asset('images/min-jpeg/trand-niche-img/7-products.jpg') }}"
                                alt="cloth-3" class="b-img b-img_wfull-hauto b-img_bordered b-img_v22">
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
                            <img src="{{ URL::asset('images/min-jpeg/trand-niche-img/8-google-sheet.jpg') }}"
                                alt="account" class="b-img b-img_full b-img_bordered b-img_v22">
                            <div class="flex v gap w65">
                                <div class="b-text b-text_1.5em">8. Заголовок</div>
                                <div class="b-text b-text_grey b_text-1.3em b-text_400">
                                    Каждый участник клуба получает индивидуальную таблицу для удобного отслеживания
                                    продаж.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}



    <section class="b-section b-section_visible pt-6">
        <div class="container container_v2 mob">



            <div class="flex v w70 mx-auto wmob">
                <div class="h-text">
                    <div
                        class="b-text b-text_fit b-text_2em b-text_700 b-text_center b-text_blue-marker b-text_blue-marker_v2 custom_media_size_change mb-1r">
                        <span class="relative nowrap blue-marker">КОНТЕНТ</span> ДЛЯ ВАШЕГО МАГАЗИНА
                    </div>
                </div>

                <div class="flex h gap_4 mt-2 mb-1">
                    <div class="block w50">
                        <div class="flex v hmin6 mb-1r __text-block">
                            <div class="b-text tcmob b-text_1.5em b-text_600 mb-05">
                                Обработанная фотка
                            </div>
                            <div class="b-text tcmob b-text_400 b-text_grey">
                                Мы устраиваем фотосессии с популярными кроссовками, чтобы показать, как они выглядят на
                                ногах.
                            </div>
                        </div>
                    </div>
                    <div class="block w50">
                        <div class="flex v hmin6 mb-1r __text-block">
                            <div class="b-text tcmob b-text_1.5em b-text_600 mb-05">
                                Бэкстэйдж
                            </div>
                            <div class="b-text tcmob b-text_400 b-text_grey">
                                Мы устраиваем фотосессии с популярными кроссовками, чтобы показать, как они выглядят на
                                ногах.
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="flex v mobalign w100 mob">
                    <div class="flex v hmin6 mb-1r __text-block">
                        <div class="b-text tcmob b-text_1.5em b-text_600 mb-05">
                            Обработанная фотка
                        </div>
                        <div class="b-text tcmob b-text_400 b-text_grey">
                            Мы устраиваем фотосессии с популярными кроссовками, чтобы показать, как они выглядят на
                            ногах.
                        </div>
                    </div>
                    <video class="b-video b-video_v2 __slide-block" muted controls preload="none"
                        poster="{{ URL::asset('images/min-jpeg/block-1/1.jpeg') }}">
                        <source src="{{ URL::asset('videos/block-1/1.mp4') }}" type="video/mp4">
                    </video>
                </div> --}}
            </div>


            <div class="swiper mySwiper flex h gap_2 w70 mx-auto wmob">
                <div class="swiper-wrapper">

                    <div class="cabs_2">
                        <img class="b-img b-img_v28" src="{{ URL::asset('images/min-png/hand-thumb-up.png') }}"
                            alt="hand-thumb-up">
                        <svg class="b-img b-img_v29" width="250px" height="250px" viewBox="0 0 400 400"
                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g transform="translate(200,200)">
                                <circle id="core" cx="0" cy="0" r="2em"></circle>
                                <circle id="radar" cx="0" cy="0" r="2em"></circle>
                            </g>
                        </svg>
                        <div class="b-text b-text_grey-dark cabs_3">Потяни</div>
                        {{-- <div class="b-text b-text_grey-dark cabs_3">🤏 Потяни</div> --}}
                    </div>


                    <div class="swiper-slide">
                        <div class="flex h gap_4">
                            <div class="block w50">
                                <img src="{{ URL::asset('images/min-jpeg/edited/edited_2.jpeg') }}"
                                    class="b-obj b-obj_v3" type="image/jpeg" alt="sneak-edition-2" loading="lazy">
                            </div>
                            <div class="block w50">
                                <video class="b-obj b-obj_v3"
                                    src="{{ URL::asset('videos/behind-the-scene-portview/2.mp4') }}" autoplay muted
                                    loop>
                                </video>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flex h gap_4">
                            <div class="block w50">
                                <img src="{{ URL::asset('images/min-jpeg/edited/edited_2.jpeg') }}"
                                    class="b-obj b-obj_v3" type="image/jpeg" alt="sneak-edition-2" loading="lazy">
                            </div>
                            <div class="block w50">
                                <video class="b-obj b-obj_v3"
                                    src="{{ URL::asset('videos/behind-the-scene-portview/2.mp4') }}" autoplay muted
                                    loop>
                                </video>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flex h gap_4">
                            <div class="block w50">
                                <img src="{{ URL::asset('images/min-jpeg/edited/edited_2.jpeg') }}"
                                    class="b-obj b-obj_v3" type="image/jpeg" alt="sneak-edition-2" loading="lazy">
                            </div>
                            <div class="block w50">
                                <video class="b-obj b-obj_v3"
                                    src="{{ URL::asset('videos/behind-the-scene-portview/2.mp4') }}" autoplay muted
                                    loop>
                                </video>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



            {{-- <div class="flex h gap_2">

                <div class="block w50">
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ URL::asset('images/min-jpeg/edited/edited_1.jpeg') }}"
                                    class="b-obj b-obj_v3" type="image/jpeg" alt="sneak-edition-1" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::asset('images/min-jpeg/edited/edited_2.jpeg') }}"
                                    class="b-obj b-obj_v3" type="image/jpeg" alt="sneak-edition-2" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::asset('images/min-jpeg/edited/edited_3.jpeg') }}"
                                    class="b-obj b-obj_v3" type="image/jpeg" alt="sneak-edition-3" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block w50">
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <img class="b-img b-img_v28" src="{{ URL::asset('images/min-png/hand-thumb-up.png') }}"
                            alt="hand-thumb-up">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <video class="b-obj b-obj_v3"
                                    src="{{ URL::asset('videos/behind-the-scene/behind_1.mp4') }}" autoplay muted
                                    loop>
                                </video>
                            </div>
                            <div class="swiper-slide">
                                <video class="b-obj b-obj_v3"
                                    src="{{ URL::asset('videos/behind-the-scene/behind_2.mp4') }}" muted loop>
                                </video>
                            </div>
                            <div class="swiper-slide">
                                <video class="b-obj b-obj_v3"
                                    src="{{ URL::asset('videos/behind-the-scene/behind_3.mp4') }}" muted loop>
                                </video>
                            </div>
                            <div class="swiper-slide">
                                <video class="b-obj b-obj_v3"
                                    src="{{ URL::asset('videos/behind-the-scene/behind_4.mp4') }}" muted loop>
                                </video>
                            </div>
                            <div class="swiper-slide">
                                <video class="b-obj b-obj_v3"
                                    src="{{ URL::asset('videos/behind-the-scene/behind_5.mp4') }}" muted loop>
                                </video>
                            </div>
                        </div>
                    </div>
                </div>

            </div> --}}

            <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                    effect: "cards",
                    grabCursor: true,
                    cardsEffect: {
                        perSlideOffset: 2, // Space between cards in px
                        perSlideRotate: 2, // Rotation of cards in degrees
                    },
                    on: {
                        slideChange: function() {
                            console.log(document.querySelectorAll('.swiper-slide video'));
                            // Pause all videos
                            document.querySelectorAll('.swiper-slide video').forEach(video => {
                                video.pause();
                            });
                            // Play the active video
                            setTimeout(() => {
                                const activeSlide = document.querySelector('.swiper-slide-active video');
                                console.log(activeSlide);
                                if (activeSlide) {
                                    activeSlide.play();
                                }
                            }, 10);
                        },
                        init: function() {
                            // Pause all videos initially
                            document.querySelectorAll('.swiper-slide video').forEach(video => {
                                video.pause();
                            });
                            // Play the active video on load
                            const activeSlide = document.querySelector('.swiper-slide-active video');
                            if (activeSlide) {
                                activeSlide.play();
                            }
                        }
                    }
                });
            </script>


            {{-- <div class="flex v">

                <div class="h-text">
                    <div
                        class="b-text b-text_fit b-text_2em b-text_700 b-text_center b-text_blue-marker b-text_blue-marker_v2 custom_media_size_change mb-1r">
                        КОНТЕНТ ДЛЯ ВАШЕГО МАГАЗИНА
                    </div>
                </div>
                <div class="b-text b-text_1.5em b-text_400 b-text_center fmob1 my-3">
                    🎥 Чтобы клиент понимал, что контент не был взят из интернета, мы фиксируем процесс съемки «за
                    кадром» и публикуем файлы в КЛУБ START.
                </div>

                <div class="b-text b-text_1.5em b-text_400 b-text_center fmob1 mb-3r">
                    Мы устраиваем фотосессии с популярными кроссовками,
                    <br>
                    чтобы показать, как они выглядят на ногах
                </div>

                <div class="flex h space-btw">
                    <img src="{{ URL::asset('images/min-jpeg/edited/edited_1.jpeg') }}" class="b-img b-img_v20"
                        type="image/jpeg" alt="sn1" loading="lazy">
                    <img src="{{ URL::asset('images/min-jpeg/edited/edited_2.jpeg') }}" class="b-img  b-img_v20"
                        type="image/jpeg" alt="sn1" loading="lazy">

                    <img src="{{ URL::asset('images/min-jpeg/edited/edited_3.jpeg') }}" class="b-img  b-img_v20"
                        type="image/jpeg" alt="sn1" loading="lazy">
                </div>



                <div class="flex h space-btw">
                    <video class="b-img b-img_v20" muted controls preload="none"
                        poster="{{ URL::asset('images/min-jpeg/behind-the-scene-portview-posters/1.jpeg') }}">
                        <source src="{{ URL::asset('videos/behind-the-scene-portview/1.mp4') }}" type="video/mp4">
                    </video>
                    <video class="b-img b-img_v20" muted controls preload="none"
                        poster="{{ URL::asset('images/min-jpeg/behind-the-scene-portview-posters/2.jpeg') }}">
                        <source src="{{ URL::asset('videos/behind-the-scene-portview/2.mp4') }}" type="video/mp4">
                    </video>
                    <video class="b-img b-img_v20" muted controls preload="none"
                        poster="{{ URL::asset('images/min-jpeg/behind-the-scene-portview-posters/3.jpeg') }}">
                        <source src="{{ URL::asset('videos/behind-the-scene-portview/3.mp4') }}" type="video/mp4">
                    </video>

                </div>



                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const animatedBlock = document.querySelector('.animated-block');

                        function updateBlockVisibility() {
                            const rect = animatedBlock.getBoundingClientRect();
                            const windowHeight = window.innerHeight;

                            // Calculate the proportion of the element that is visible
                            const visibleRatio = Math.max(0, Math.min(1, (windowHeight - rect.top) / (rect.height +
                                windowHeight)));

                            // Set the opacity based on the visible ratio (from 0 to 0.25)
                            animatedBlock.style.opacity = Math.min(0.5, visibleRatio * 0.75);

                            // Move the element from right to left based on its visibility
                            const translateX = 100 * (0.25 - visibleRatio); // Move from 100% to 0%
                            animatedBlock.style.transform = `translateX(${translateX}%)`;
                        }

                        // Update visibility on scroll and resize
                        window.addEventListener('scroll', updateBlockVisibility);
                        window.addEventListener('resize', updateBlockVisibility);

                        // Initial check
                        updateBlockVisibility();
                    });
                </script>

            </div> --}}
        </div>

    </section>

    <section class="b-section pt-12">
        <div id="gradient-effect_bf2" class="container container_v2 mob">
            <div class="fade-in fade-in_v1 top -z-1"></div>


            <div class="vignette vignette_v1 -z-2"></div>
            <div class="grad-block grad-block_v1 -z-3">
                <div id="follow-gradient" class="follow-gradient">
                    <div class="grad-text"></div>
                </div>
            </div>

            <div class="flex v">

                <div class="h-text">
                    <div
                        class="b-text b-text_fit b-text_2em b-text_700 b-text_center b-text_blue-marker b-text_blue-marker_v2 custom_media_size_change mb-3r">
                        УНИВЕРСАЛЬНЫЙ ТАРИФ, В КОТОРЫЙ
                        <span class="relative nowrap blue-marker">ВСЕ ВКЛЮЧЕНО</span>
                    </div>
                </div>

                <div class="flex fit w40 m-auto mob">
                    <svg class="b-img b-img_v25" width="421" height="399" viewBox="0 0 421 399" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M210.5 0C210.5 0 229.409 121.766 260.005 152.362C290.601 182.958 420.208 152.362 420.208 152.362C420.208 152.362 290.601 188.329 290.601 246.526C290.601 304.724 340.107 398.888 340.107 398.888C340.107 398.888 260.005 304.724 210.5 304.724C160.995 304.724 80.8934 398.888 80.8934 398.888C80.8934 398.888 130.399 304.724 130.399 246.526C130.399 188.329 0.792038 152.362 0.792038 152.362C0.792038 152.362 130.399 182.958 160.995 152.362C191.591 121.766 210.5 0 210.5 0Z"
                            fill="#0dfd56" />
                    </svg>
                    <div class="card flex align">

                        <div class="flex fit gap v mb-2r">
                            <div class="flex gap h align">
                                <x-svg class="b-img b-img_v1" svg="CheckCircle" />
                                <div class="b-text b-text_1.3em b-text_400">Кроссовки по себестоимости</div>
                            </div>
                            <div class="flex gap h align">
                                <x-svg class="b-img b-img_v1" svg="CheckCircle" />
                                <div class="b-text b-text_1.3em b-text_400">Обратная связь по всем вопросам</div>
                            </div>
                            <div class="flex gap h align">
                                <x-svg class="b-img b-img_v1" svg="CheckCircle" />
                                <div class="b-text b-text_1.3em b-text_400">Закрытое сообщество в Телеграм</div>
                            </div>
                            <div class="flex gap h align">
                                <x-svg class="b-img b-img_v1" svg="CheckCircle" />
                                <div class="b-text b-text_1.3em b-text_400">Конференции и лекции по продажам кроссовок
                                </div>
                            </div>
                        </div>
                        <div class="flex v">
                            <div class="b-text b-text_1.3em b-text_center mb-1r">
                                Едижемесечная подписка на<br>"КЛУБ START"
                            </div>
                            <div class="b-text b-text_4em b-text_700 b-text_center mb-2r">6 000 ₽</div>
                            <a class="go-button v2 mb-1r" href="{{ route('register') }}">ГОТОВ НАЧАТЬ</a>
                            <div class="b-text b-text_grey b-text_center b-text_08">При оплате вы принимаете
                                условия<br>
                                <a href="{{ route('documents') }}">договора оферты</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>

    <section class="b-section pt-6">
        <div class="container container_v2 mob">

            <div class="flex v">

                <div class="h-text">
                    <div
                        class="b-text b-text_fit-content b-text_2em b-text_700 b-text_center custom_media_size_change b-text_blue-marker b-text_blue-marker_v1 mb-1r">
                        ПРОДАЛИ
                        <span class="relative nowrap blue-marker">~107 ТЫСЯЧ</span>
                        ПАР КРОССОВОК
                    </div>
                </div>
                <div class="b-text b-text_1.5em b-text_400 b-text_center fmob1 mb-3r">
                    И вот что говорят клиенты о нашем товаре
                </div>


                <div wire:ignore class="slider_v5 relative video-slider">

                    <div class="flex v w100 mx-1">
                        <video class="b-video b-video_v2 __slide-block" muted controls preload="none"
                            poster="{{ URL::asset('images/min-jpeg/feedback-posters/feedback-poster_1.jpeg') }}">
                            <source src="{{ URL::asset('videos/feedbacks/feedback_1.mp4') }}" type="video/mp4">
                        </video>
                    </div>

                    <div class="flex v w100 mx-1">
                        <video class="b-video b-video_v2 __slide-block" muted controls preload="none"
                            poster="{{ URL::asset('images/min-jpeg/feedback-posters/feedback-poster_2.jpeg') }}">
                            <source src="{{ URL::asset('videos/feedbacks/feedback_2.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="flex v w100 mx-1">
                        <video class="b-video b-video_v2 __slide-block" muted controls preload="none"
                            poster="{{ URL::asset('images/min-jpeg/feedback-posters/feedback-poster_3.jpeg') }}">
                            <source src="{{ URL::asset('videos/feedbacks/feedback_3.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="flex v w100 mx-1">
                        <video class="b-video b-video_v2 __slide-block" muted controls preload="none"
                            poster="{{ URL::asset('images/min-jpeg/feedback-posters/feedback-poster_4.jpeg') }}">
                            <source src="{{ URL::asset('videos/feedbacks/feedback_4.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="flex v w100 mx-1">
                        <video class="b-video b-video_v2 __slide-block" muted controls preload="none"
                            poster="{{ URL::asset('images/min-jpeg/feedback-posters/feedback-poster_5.jpeg') }}">
                            <source src="{{ URL::asset('videos/feedbacks/feedback_5.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="flex v w100 mx-1">
                        <video class="b-video b-video_v2 __slide-block" muted controls preload="none"
                            poster="{{ URL::asset('images/min-jpeg/feedback-posters/feedback-poster_6.jpeg') }}">
                            <source src="{{ URL::asset('videos/feedbacks/feedback_6.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="flex v w100 mx-1">
                        <video class="b-video b-video_v2 __slide-block" muted controls preload="none"
                            poster="{{ URL::asset('images/min-jpeg/feedback-posters/feedback-poster_7.jpeg') }}">
                            <source src="{{ URL::asset('videos/feedbacks/feedback_7.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="flex v w100 mx-1">
                        <video class="b-video b-video_v2 __slide-block" muted controls preload="none"
                            poster="{{ URL::asset('images/min-jpeg/feedback-posters/feedback-poster_8.jpeg') }}">
                            <source src="{{ URL::asset('videos/feedbacks/feedback_8.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="flex v w100 mx-1">
                        <video class="b-video b-video_v2 __slide-block" muted controls preload="none"
                            poster="{{ URL::asset('images/min-jpeg/feedback-posters/feedback-poster_9.jpeg') }}">
                            <source src="{{ URL::asset('videos/feedbacks/feedback_9.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="flex v w100 mx-1">
                        <video class="b-video b-video_v2 __slide-block" muted controls preload="none"
                            poster="{{ URL::asset('images/min-jpeg/feedback-posters/feedback-poster_10.jpeg') }}">
                            <source src="{{ URL::asset('videos/feedbacks/feedback_10.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="flex v w100 mx-1">
                        <video class="b-video b-video_v2 __slide-block" muted controls preload="none"
                            poster="{{ URL::asset('images/min-jpeg/feedback-posters/feedback-poster_11.jpeg') }}">
                            <source src="{{ URL::asset('videos/feedbacks/feedback_11.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="flex v w100 mx-1">
                        <video class="b-video b-video_v2 __slide-block" muted controls preload="none"
                            poster="{{ URL::asset('images/min-jpeg/feedback-posters/feedback-poster_12.jpeg') }}">
                            <source src="{{ URL::asset('videos/feedbacks/feedback_12.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <section class="b-section b-section_v3 b-section_visible pt-6">
        <div class="fade-in fade-in_v1 top"></div>
        <x-svg class="b-img b-img_v7" svg="NikePair" />
        <div class="container container_v2 mob">
            {{-- <div id="gradient-effect_bf1" class="container container_v2 mob"> --}}
            {{-- <div class="fade-in fade-in_v1 top -z-1"></div> --}}


            {{-- <div class="vignette -z-2"></div>
            <div class="grad-block -z-3">
                <div id="follow-gradient" class="follow-gradient">
                    <div class="grad-text"></div>
                </div>
            </div> --}}

            <div class="h-text">
                <div
                    class="b-text b-text_fit-content b-text_2em b-text_700 b-text_center custom_media_size_change b-text_blue-marker b-text_blue-marker_v1 mb-1r">
                    <span class="relative nowrap blue-marker">КАК РАБОТАЕТ</span>
                    «КЛУБ СТАРТ»
                </div>
            </div>
            <div class="b-text b-text_1.5em b-text_400 b-text_center fmob1 mb-3r">
                Всего 3 шага и ты владелец своего личного
                <br>
                интернет-магазина кроссовок.
            </div>

            <div class="accordion-container mb-5">
                <div class="divider"></div>
                <div class="accordion">

                    <div class="accordion-item noise">
                        <button id="accordion-button-1" aria-expanded="false">
                            <div class="flex h align">
                                <span
                                    class="b-text b-text_grey b-text_grey_light-mode b-text_400 b-text_1.5em b-text_nowrap fmob1">
                                    Шаг 1
                                </span>
                                <span class="b-text b-text_600 b-text_2em fmob5 ml-05">Кроссовки по себестоимости от 1
                                    пары
                                </span>
                            </div>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">

                            <div class="flex gap_05 v mt-1.5">
                                <div class="b-text b-text_1.3em b-text_600">
                                    Что получите:
                                </div>
                                <div class="b-text b-text_400 b-text_1.2em">
                                    Поставщика кроссовок, работающего по системе «дропшиппинга»
                                </div>
                            </div>

                            <div class="flex gap_05 v mt-1.5">
                                <div class="b-text b-text_1.3em b-text_600">
                                    💡 Результат:
                                </div>
                                <div class="flex v gap_05">
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        1. Без вложения в товар, доступ к 610 моделям кроссовок
                                    </div>
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        2. Для вас цена кроссовок по себестоимости (БЕЗ НАКРУТКИ)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="{{ URL::asset('images/min-webp/coin.webp') }}" class="b-img b-img_v15"
                            type="image/webp" loading="lazy">
                    </div>

                    <div class="accordion-item noise">
                        <button id="accordion-button-2" aria-expanded="false">
                            <div class="flex h align">
                                <span
                                    class="b-text b-text_grey b-text_grey_light-mode b-text_400 b-text_1.5em b-text_nowrap fmob1">Шаг
                                    2</span>
                                <span class="b-text b-text_600 b-text_2em fmob5 ml-05">База знаний «продавца
                                    кроссовок»</span>
                            </div>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">

                            <div class="flex gap_05 v mt-1.5">
                                <div class="b-text b-text_1.3em b-text_600">
                                    Что получите:
                                </div>
                                <div class="flex v gap_05">
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        1. Доступ к основному телеграм-каналу «КЛУБ СТАРТ»
                                    </div>
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        2. Доступ к 3-х летнему «архиву» клуба (С чего мы начинали и какие шаги привели
                                        к
                                        такому итогу)
                                    </div>
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        3. Google таблица с актуальными размерами
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap_05 v mt-1.5">
                                <div class="b-text b-text_1.3em b-text_600">
                                    Что узнаете:
                                </div>
                                <div class="flex v gap_05">
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        1. Где брать фото и видео поставок, без водяного знака
                                    </div>
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        2. Ошибка 98.9 % предпринимателей.
                                    </div>
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        3. Как победить всех конкурентов и стать №1 в своем городе
                                    </div>
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        4. Оформить заказ
                                    </div>
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        5. Оформить заказ по "наложенному платежу"
                                    </div>
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        6. Лучшая накрутка на кроссовки
                                    </div>
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        7. Видео от нашего таргетолога по запуску рекламы
                                    </div>
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        8. Видео курс от Даниила по запуску рекламы без денег
                                    </div>
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        9. Как общаться с клиентами чтобы не слить продажу
                                    </div>
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        10. Как выйти на 100 продаж в первые 2 месяца работы
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap_05 v mt-1.5">
                                <div class="b-text b-text_1.3em b-text_600">
                                    💡 Результат:
                                </div>
                                <div class="b-text b-text_400 b-text_1.2em">
                                    Вы создадите продающий аккаунт
                                    магазина кроссовок в интернете
                                </div>
                            </div>
                        </div>
                        <img src="{{ URL::asset('images/min-png/heart.png') }}" class="b-img b-img_v15"
                            type="image/png" loading="lazy">
                    </div>

                    <div class="accordion-item noise">
                        <button id="accordion-button-3" aria-expanded="false">
                            <div class="flex h align">
                                <span
                                    class="b-text b-text_grey b-text_grey_light-mode b-text_400 b-text_1.5em b-text_nowrap fmob1">Шаг
                                    3</span>
                                <span class="b-text b-text_600 b-text_2em fmob5 ml-05">Марафон по бизнесу на
                                    кроссовках</span>
                            </div>
                            <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">

                            <div class="flex gap_05 v mt-1.5">
                                <div class="b-text b-text_1.3em b-text_600">
                                    Что получете:
                                </div>
                                <div class="b-text b-text_400 b-text_1.2em">
                                    Доступ к 3-х дневному, онлайн марафону для новичков в этом бизнесе. В формате
                                    фото |видео | голосовых сообщений, мы разберём с чего начать бизнес на
                                    кроссовках
                                </div>
                            </div>

                            <div class="flex gap_05 v mt-1.5">
                                <div class="b-text b-text_1.3em b-text_600">
                                    💡 Результат:
                                </div>
                                <div class="flex v gap_05">
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        1. Полное понимание всех технических моментов
                                    </div>
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        2. За 3 дня создадим интернет магазин кроссовок
                                    </div>
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        3. На чужом опыте узнаете, как не допустить ошибок в работе с кроссовками
                                    </div>
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        4. Разбор аккаунтов участников марафона
                                    </div>
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        5. Узнаете про 5 дополнительных способов продвижения магазина в соцсетях
                                    </div>
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        6. Первые лиды, обращения, а возможно первая продажа
                                    </div>
                                    <div class="b-text b-text_400 b-text_1.2em">
                                        7. Полностью упакованный бизнес и стратегия для развития
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="{{ URL::asset('images/min-webp/deal-glasses.webp') }}"
                            class="b-img b-img_v15 b-img_v15_1" type="image/webp" loading="lazy">

                    </div>
                </div>
            </div>


        </div>

    </section>

    <section class="b-section b-section_doted b-section_v5 b-section_visible">
        <div class="container container_v2 mob">

            <div class="h-text">
                <div class="b-text b-text_fit-content b-text_2.5em b-text_700 b-text_center my-3 b-text_after-orator">
                    ЧАСТЫЕ
                    <span class="relative nowrap blue-marker">ВОПРОСЫ</span>
                </div>
            </div>
            <div class="accordion-container">
                <div class="divider"></div>
                <div class="flex h gap mob accordion">
                    <div class="flex v gap">
                        <div class="accordion-item">
                            <button id="accordion-button-1" aria-expanded="false">
                                <span class="b-text b-text_2em fmob4">Как оплатить?</span>
                                <span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                    Выберите удобный способ оплаты, после того как пройдете регистрацию. Вы можете
                                    оплатить
                                    доступ в клуб из любого банка РФ.
                                    <br><br>
                                    *Если нужно оплатить иностранной картой, обратитесь в службу заботы: <a
                                        href="https://t.me/ClubStarthelp_bot">@ClubStarthelp_bot</a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-2" aria-expanded="false">
                                <span class="b-text b-text_2em fmob4">Что будет после оплаты?</span>
                                <span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                    Вы будете перенаправлены в личный кабинет, где найдите ссылку на закрытый
                                    Telegram-канал
                                    "КЛУБ START".
                                    <br><br>
                                    Также, в вашем личном кабинете будут ссылки на: марафон, таблицы, архивы
                                    клуба (с чего мы начинали и что привело к результату) и другие актуальные ссылки для
                                    продуктивной работы.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-3" aria-expanded="false">
                                <span class="b-text b-text_2em fmob4">В каком городе и странах можно работать?</span>
                                <span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                    У нас заключён официальный договор с транспортной компанией, поэтому продавать
                                    кроссовки
                                    и участвовать в клубе вы можете в любом городе мира.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-4" aria-expanded="false">
                                <span class="b-text b-text_2em fmob4">Кроссовки оригинал?</span>
                                <span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                    Для того чтобы в полной мере ответвить на этот вопрос, я записал отдельное
                                    пояснения👇
                                </div>
                                <audio controls preload="none">
                                    <source src="{{ URL::asset('/audio/audio-are-genuine-sneakers.ogg') }}"
                                        type="audio/ogg">
                                    Ваш браузер не поддерживает аудио элементы.
                                </audio>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-5" aria-expanded="false">
                                <span class="b-text b-text_2em fmob4">В чем суть клуба?</span>
                                <span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                    В клубе у вас будет возможность покупать кроссовки от одной пары по закупочной цене.
                                    Также вам будет предоставлен доступ к продающему контенту для сайта и соцсетей.
                                    <br><br>
                                    Вы станете частью сообщества продавцов кроссовок, и получите информационную
                                    поддержку,
                                    благодаря чему избежите множество ошибок на старте.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-6" aria-expanded="false">
                                <span class="b-text b-text_2em fmob4">Есть ли возврат?</span>
                                <span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                    Возврат кроссовок возможен в течение 14 дней. Вы или ваш клиент можете вернуть
                                    кроссовки
                                    на склад и получить деньги обратно.
                                    <br><br>
                                    На клуб возврата нет. Услуга считается оказанной, с момента получения доступа.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-7" aria-expanded="false">
                                <span class="b-text b-text_2em fmob4">Можно ли оплатить кроссовки после
                                    получения?</span>
                                <span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                    Да, при оформлении заказа можно указать, чтобы оплата была после получения товара.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex v gap">

                        <div class="accordion-item">
                            <button id="accordion-button-8" aria-expanded="false">
                                <span class="b-text b-text_2em fmob4">Можно купить кроссовки по дроппу без
                                    клуба?</span>
                                <span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                    Для всех участников клуба действуют низкие цены по дропшиппингу. Получить к ним
                                    доступ
                                    вы можете оплатив ежемесячный членский взнос.
                                    <br><br>
                                    Если вы хотите оформить заказ без клуба,
                                    тогда для вас будет действовать розничная цена, как для всех обычных клиентов.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-9" aria-expanded="false">
                                <span class="b-text b-text_2em fmob4">Если это мой первый бизнес, смогу ли я
                                    разобраться?</span>
                                <span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                    Да, каждый этап создания магазина я объясняю простым языком. От вас не потребуется
                                    специальных знаний и опыта, вы сможете их получить в процессе.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-10" aria-expanded="false">
                                <span class="b-text b-text_2em fmob4">Где находится клуб?</span>
                                <span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                    Клуб находится в закрытом телеграмм канале. Общение в клубе происходит текстом,
                                    кружочками, эфирами и войсами как в реальной переписке.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-11" aria-expanded="false">
                                <span class="b-text b-text_2em fmob4">Что такое дропшиппинг?</span>
                                <span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                    Дропшиппинг — это продажа кроссовок поставщика под заказ клиента. В клубе вы сможете
                                    заказывать кроссовки себе или напрямую вашим покупателям, а прибыль с продаж
                                    получать
                                    переводом на карту.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-12" aria-expanded="false">
                                <span class="b-text b-text_2em fmob4">Как продлить/отменить подписку на клуб?</span>
                                <span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                    После успешной оплаты деньги будут автоматически списываться с той карты, через
                                    которую
                                    вы оплатили клуб.
                                    <br><br>
                                    Чтобы отменить подписку, зайдите в личный кабинет, выберите раздел "Настройки" и
                                    перейдите в раздел "Подписка", затем нажмите кнопку "Отменить".
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-13" aria-expanded="false">
                                <span class="b-text b-text_2em fmob4">Как я получу доступ, и что делать, если возникнут
                                    трудности
                                    с оплатой или клубом?</span>
                                <span class="icon" aria-hidden="true"></span></button>
                            <div class="accordion-content">
                                <div class="b-text b-text_1.2em b-text_400 b-text_grey my-1">
                                    После оплаты, у вас создаться личный кабинет, где будут все ссылки клуб start.
                                    <br><br>
                                    *После оплаты, вы буду перемещены в личный кабинет автоматически.
                                    <br><br>
                                    Если возникнут трудности, мы поможем. Напишите в отдел заботы, указав почту,
                                    на которую
                                    была совершена оплата. Телеграм поддержки: <a
                                        href="https://t.me/ClubStarthelp_bot">@ClubStarthelp_bot</a>
                                </div>
                            </div>
                        </div>
                        <script>
                            function truncateText(element, maxLetters) {
                                let text = element.textContent.replace(/\s+/g, '');
                                if (text.length > maxLetters) {
                                    let truncatedText = '';
                                    let letterCount = 0;

                                    for (let char of element.textContent) {
                                        if (char !== ' ') {
                                            letterCount++;
                                        }
                                        if (letterCount > maxLetters) {
                                            truncatedText += '...';
                                            break;
                                        }
                                        truncatedText += char;
                                    }

                                    element.textContent = truncatedText;
                                }
                            }

                            document.addEventListener('DOMContentLoaded', () => {
                                const textElements = document.querySelectorAll('.accordion-item .b-text.b-text_2em');
                                const buttons = document.querySelectorAll('.accordion-item button');

                                textElements.forEach(textElement => {
                                    // Store the full text in a data attribute
                                    textElement.dataset.fullText = textElement.textContent;
                                    truncateText(textElement, 40);
                                });

                                buttons.forEach(button => {
                                    button.addEventListener("click", function() {
                                        const textElement = this.querySelector('.b-text.b-text_2em');
                                        const isExpanded = this.getAttribute('aria-expanded') === 'true';

                                        if (isExpanded) {
                                            // If expanded, truncate the text
                                            truncateText(textElement, 40);
                                        } else {
                                            // If not expanded, show the full text
                                            textElement.textContent = textElement.dataset.fullText;
                                        }
                                    });
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="abs_blur_effect_custom"></div>
            <div class="abs_blur_effect_custom green"></div>
        </div>

        <div class="fade-in"></div>
    </section>

    <section class="b-section b-section_visible">
        <div class="container container_v2 mob">

            <div class="flex v">
                {{-- <img src="{{ URL::asset('images/min-webp/star-sticker.webp') }}" alt="star-sticker"
                    class="b-img b-img_v17"> --}}

                <div class="b-text b-text_uppercase b-text_2.5em b-text_700 b-text_center b-text_fit m-auto mb-6r">
                    <span class="relative nowrap blue-marker">С ТОБОЙ</span>
                    ДЕЛИТСЯ ЗНАНИЯМИ
                </div>

                <div class="flex v gap_2 mob">


                    <div class="flex h gap_4 mob">

                        <div class="flex v w30 mob gap_2">
                            <div class="flex v">
                                <div wire:ignore class="slider_v6">

                                    <div class="flex v">
                                        <img src="{{ URL::asset('images/min-jpeg/author-img/3.jpg') }}"
                                            class="b-img b-img_v16 cursor_grab __slide-block mx-1" type="image/jpeg"
                                            alt="sn1" loading="lazy">
                                        <div
                                            class="absolute bottom-0 left-0 b-text w b-text_2em b-text_lh-1em b-text_600 b-text_shadow4 b-text_uppercase ml-1.5">
                                            Даня<br>
                                            Шкитов
                                        </div>
                                    </div>

                                    <div class="flex v">
                                        <div
                                            class="absolute bottom-0 left-0 b-text w b-text_2em b-text_lh-1em b-text_600 b-text_shadow4 b-text_uppercase ml-1.5">
                                            Даня<br>
                                            Шкитов
                                        </div>
                                        <img src="{{ URL::asset('images/min-jpeg/author-img/2.jpg') }}"
                                            class="b-img b-img_v16 cursor_grab __slide-block mx-1" type="image/jpeg"
                                            alt="sn1" loading="lazy">
                                    </div>


                                    <div class="flex v">
                                        <div
                                            class="absolute bottom-0 left-0 b-text w b-text_2em b-text_lh-1em b-text_600 b-text_shadow4 b-text_uppercase ml-1.5">
                                            Даня<br>
                                            Шкитов
                                        </div>
                                        <img src="{{ URL::asset('images/min-jpeg/author-img/1.jpg') }}"
                                            class="b-img b-img_v16 cursor_grab __slide-block mx-1" type="image/jpeg"
                                            alt="sn1" loading="lazy">
                                    </div>

                                    <div class="flex v">
                                        <img src="{{ URL::asset('images/min-jpeg/author-img/4.jpg') }}"
                                            class="b-img b-img_v16 cursor_grab __slide-block mx-1" type="image/jpeg"
                                            alt="sn1" loading="lazy">
                                        <div
                                            class="absolute bottom-0 left-0 b-text w b-text_2em b-text_lh-1em b-text_600 b-text_shadow4 b-text_uppercase ml-1.5">
                                            Даня<br>
                                            Шкитов
                                        </div>
                                    </div>

                                    <div class="flex v">
                                        <img src="{{ URL::asset('images/min-jpeg/author-img/5.jpg') }}"
                                            class="b-img b-img_v16 cursor_grab __slide-block mx-1" type="image/jpeg"
                                            alt="sn1" loading="lazy">
                                        <div
                                            class="absolute bottom-0 left-0 b-text w b-text_2em b-text_lh-1em b-text_600 b-text_shadow4 b-text_uppercase ml-1.5">
                                            Даня<br>
                                            Шкитов
                                        </div>
                                    </div>

                                    <div class="flex v">
                                        <img src="{{ URL::asset('images/min-jpeg/author-img/6.jpg') }}"
                                            class="b-img b-img_v16 cursor_grab __slide-block mx-1" type="image/jpeg"
                                            alt="sn1" loading="lazy">
                                        <div
                                            class="absolute bottom-0 left-0 b-text w b-text_2em b-text_lh-1em b-text_600 b-text_shadow4 b-text_uppercase ml-1.5">
                                            Даня<br>
                                            Шкитов
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex v w50 wmob space-btw">
                            <div class="flex v gap mb-2r">
                                <div class="b-text b-text_1.5em b-text_400">
                                    Создатель клуба, поставщик и ведущий YouTube-канала
                                    <a target="_blank" href="https://www.youtube.com/@shkitov" class="mt-1">
                                        <img src="{{ URL::asset('images/yt-logo.jpg') }}" alt="yt-logo"
                                            class="b-img b-img_v21">
                                    </a>
                                </div>
                                <div class="b-text b-text_grey b-text_400">
                                    Даниил лично делится всей информацией в клубе в виде текстов, аудио и видео
                                    контента.
                                </div>
                            </div>

                            <div class="flex v">
                                <div class="b-text b-text_1.5em b-text_500">
                                    <span class="b-text b-text_2em b-text_700">470</span> выпускников
                                </div>
                                <div class="b-text b-text_1.5em b-text_500 mb-1r">
                                    <span class="b-text b-text_2em b-text_700">295.000</span> подписчиков
                                </div>
                                <div class="flex gap-2 h">
                                    <div class="flex gap_05 h align">
                                        <img src="{{ URL::asset('images/svg/img-case/instagram.svg') }}"
                                            class="b-img" alt="instagram" loading="lazy">
                                        <a href="https://www.instagram.com/daniilshkit">daniilshkit</a>
                                    </div>
                                    <div class="flex gap_05 h align">
                                        <x-svg class="b-img b-img_v1" svg="Telegram" />
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

    <div id="video-intro">
        <div class="video-wrapper">
            <img src="{{ URL::asset('images/svg/img-case/RedCross.svg') }}" class="b-img b-img_remove"
                alt="remove" loading="lazy">

            <div class="b-img b-img_remove v1">—</div>

            <video src="{{ URL::asset('videos/camera.mp4') }}" autoplay muted loop>
            </video>
        </div>
    </div>

    <x-footer />

    @section('main-index-styles')
        {{-- custom styles only for main page --}}
        <link defer href="{{ secure_asset('styles/main-page.css') }}" type="text/css" rel="stylesheet">
        {{-- main & first section --}}
        <link defer href="{{ secure_asset('styles/first-section.css') }}" type="text/css" rel="stylesheet">
        {{-- slick slider --}}
        <link defer href="{{ secure_asset('styles/slick-slider.css') }}" type="text/css" rel="stylesheet">
        {{-- glitch effect --}}
        <link defer href="{{ secure_asset('styles/glitch.css') }}" type="text/css" rel="stylesheet">
        {{-- accordion --}}
        <link defer href="{{ secure_asset('styles/accordion.css') }}" type="text/css" rel="stylesheet">
        <!-- +++++++++++ CDNs +++++++++++ -->
        {{-- Swiper Css --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        {{-- slick slider --}}
        <link defer rel="stylesheet" type="text/css"
            href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    @stop

    @section('main-index-script')
        {{--  Slick Slider Library  --}}
        <script defer type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        {{-- Three.js Library --}}
        <script type="module" src="{{ URL::asset('javascript/3D/NikeAirMag.js') }}"></script>
        {{-- <script type="module" src="{{ URL::asset('javascript/3D/Globe.js') }}"></script> --}}
        {{-- Different Scene --}}
        {{-- <script src="{{ URL::asset('javascript/3D/SneakersOnBox.js') }}"></script> --}}
        {{-- Slick-slider --}}
        <script src="{{ URL::asset('javascript/slick-slider.js') }}"></script>
        {{-- Accordion --}}
        <script src="{{ URL::asset('javascript/accordion.js') }}"></script>
        {{-- Main page --}}
        <script src="{{ URL::asset('javascript/main-page.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    @stop
</div>
