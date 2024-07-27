<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'КЛУБ START' }}</title>

    <!-- +++++++++++ PROJECT CSS +++++++++++ -->
    <link href="{{ secure_asset('styles/main.css') }}" type="text/css" rel="stylesheet">
    <link defer href="{{ secure_asset('styles/light-mode.css') }}" type="text/css" rel="stylesheet">
    @yield('main-index-styles')
    <link href="{{ secure_asset('styles/dashboard-page.css') }}" type="text/css" rel="stylesheet">

    <style>
        .bloxk_sd {
            background: red;
            width: 20em;
            height: 20em;
        }

        .contain {
            position: absolute;
            margin: 0 24em;
            width: auto;
            display: flex;
            flex-direction: column;
            gap: 1em;
        }
    </style>
</head>

<body>
    <div class="flex gap_2 h h100 w100">
        <livewire:templates.side-menu />
        <div class="flex w100 h100 pt-2 pr-2">
            {{ $slot }}
        </div>
    </div>
    {{-- <div class="contain">
        <div class="bloxk_sd"></div>
        <div class="bloxk_sd"></div>
        <div class="bloxk_sd"></div>
        <div class="bloxk_sd"></div>
        <div class="bloxk_sd"></div>
        <div class="bloxk_sd"></div>
        <div class="bloxk_sd"></div>
        <div class="bloxk_sd"></div>
        <div class="bloxk_sd"></div>
    </div> --}}

    {{-- script for dynamic side menu scroll --}}
    {{-- <script>
        var lastScrollTop = 0;
        var dynamic = true;
        var dynamic1 = true;
        var isTriggered = true;
        var currentTop = 0;
        var reverse = false;
        var measure = 0;

        var sideMenu = document.getElementById("sideMenu");

        if (window.innerHeight <= sideMenu.getBoundingClientRect().height) {
            console.log("<=");
            // sideMenu.style.position = "absolute";
            // sideMenu.style.height = "auto";

            window.addEventListener("scroll", function() {
                var rect = sideMenu.getBoundingClientRect();
                var windowHeight = window.innerHeight || document.documentElement.clientHeight;
                var docRect = document.documentElement.getBoundingClientRect();

                console.log("-------------------");
                // console.log("rect", rect)
                // console.log("docRect", docRect)

                if (rect.top >= 0) {
                    sideMenu.setAttribute("style", "position: fixed; top: 0px;");
                    isTriggered = true;
                }

                if (isTriggered) {
                    if (docRect.top < lastScrollTop) {
                        sideMenu.setAttribute("style", `position: absolute; top: ${Math.abs(docRect.top)}px`);
                        isTriggered = false;
                    }
                }

                if (!reverse) {
                    console.log("top y of docRect:", Math.abs(docRect.y));
                    console.log("distance:", Math.abs(measure));
                    now = true;
                    if (now) {
                        measure = currentTop - rect.height + windowHeight;
                        now = false;
                    }
                    if (Math.abs(docRect.y) >= Math.abs(measure) && dynamic) {
                        console.log("met");
                        sideMenu.setAttribute("style", "position: fixed; bottom: 0px;");
                        dynamic = false;
                        dynamic1 = true;
                    }
                } else {
                    console.log("bottom measure:", measure);
                    console.log("rect bottom:", Math.abs(rect.bottom));
                    if (measure >= Math.abs(rect.bottom) && dynamic) {
                        sideMenu.setAttribute("style", "position: fixed; bottom: 0px;");
                        dynamic = false;
                        dynamic1 = true;
                    }
                }


                if (docRect.top > lastScrollTop && dynamic1) {
                    console.log("greater");
                    sideMenu.setAttribute("style", `position: absolute; bottom: ${docRect.bottom-windowHeight}px`);

                    dynamic1 = false;
                    dynamic = true;
                    measure = rect.bottom;
                    console.log("docRect", docRect);
                    reverse = true;
                }

                lastScrollTop = docRect.top;

            });

        } else {
            sideMenu.style.height = "100%";
        }
    </script> --}}


    {{-- <livewire:layouts.kernel /> --}}
    {{-- <div class="modern-wrap"> --}}


    {{-- {{ $slot }} --}}
    {{-- <section class="b-section b-section_v4">
            <div class="container container_v4 mb-2">
                <div class="flex v7 h w100 space-btw my-2">
                    <x-svg svg="Menu" class="menu-icon" id="menu-button" />
                    <a href="{{ route('referral.transactions') }}" class="go-button v3">Баланс:
                        {{ Auth::user()->amount }} р.</a>
                </div>
                {{ $slot }}
            </div>
        </section> --}}
    {{-- </div> --}}


    @persist('static-javascript')
        <!-- +++++++++++ CDNs +++++++++++ -->
        {{-- jQuery/Mask jQuery --}}
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <!-- Fix jQuery [Violation] non-passive event (support https://github.com/ignasdamunskis/passive-events-support) -->
        {{-- <script>
            window.passiveSupport = {
                events: ['touchstart', 'touchmove']
            }
        </script>
        <script type="module" src="{{ URL::asset('javascript/passive-events-support/dist/main.js') }}"></script> --}}

        <!-- +++++++++++ PROJECT JAVASCRIPT +++++++++++ -->
        {{-- custom modern --}}
        <script src="{{ secure_asset('javascript/modern.js') }}"></script>
        {{-- dashboard-adaptive-script --}}
        {{-- <script>
            document.addEventListener('livewire:navigated', () => {
                const sideMenu = document.getElementById("sideMenu");
                const menuButton = document.getElementById("menu-button");
                const blackCover = document.getElementById("side-menu-black-cover");

                // set z-index if css will fail
                sideMenu.style.zIndex = 101;

                // functions
                function activateMobile() {
                    blackCover.style.display = "none";
                    sideMenu.style.transform = `translateX(${-(sideMenu.getBoundingClientRect().width)}px)`;
                }

                function deactivateMobile() {
                    sideMenu.style.transform = "translateX(0px)";
                    blackCover.style.display = "block";
                }

                // functions
                function activateDesktop() {
                    sideMenu.classList.add("adaptive");
                    sideMenu.style.transform = `translateX(${-(sideMenu.getBoundingClientRect().width)}px)`;
                }

                function deactivateDesktop() {
                    sideMenu.classList.remove("adaptive");
                    sideMenu.style.transform = "translateX(0px)";
                }

                function main() {
                    if (window.innerWidth <= 890) {
                        // mobile
                        sideMenu.classList.add("adaptive");
                        activateMobile();

                        blackCover.addEventListener("click", function() {
                            activateMobile();
                        });
                    } else {
                        // desktop
                        deactivateDesktop();
                    }
                }

                // logic
                main();
                window.addEventListener("resize", function() {
                    main();
                });

                menuButton.addEventListener("click", function() {
                    if (window.innerWidth <= 890) {
                        sideMenu.style.transform === "translateX(0px)" ? activateMobile() : deactivateMobile();
                    } else {
                        sideMenu.style.transform === "translateX(0px)" ? activateDesktop() :
                            deactivateDesktop();
                    }
                });
            }, {
                once: true
            });
        </script> --}}

        {{-- optimized js --}}
        @yield('main-index-script')
        @yield('card-credentials-script')
    @endpersist
</body>

</html>
