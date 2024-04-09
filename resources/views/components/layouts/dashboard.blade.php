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
</head>


<body class="{{ request()->cookie('checked') ? 'lightMode' : 'darkMode' }}">

    <div class="flex h w100 h100">
        <div id="side-menu-black-cover" class="cursor_crosshair"></div>
        <livewire:templates.side-menu />

        <section class="b-section b-section_crosses b-section_v4">
            <div class="container container_v4 mb-2">
                <div class="flex v7 h w100 space-btw my-2">
                    <x-svg svg="Menu" class="menu-icon" id="menu-button" />
                    <a href="{{ route('referral.transactions') }}" class="go-button v3">Баланс:
                        {{ Auth::user()->amount }} р.</a>
                </div>
                {{ $slot }}
            </div>
        </section>
    </div>

    @persist('static-javascript')
        <!-- +++++++++++ CDNs +++++++++++ -->
        {{-- jQuery/Mask jQuery --}}
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <!-- Fix jQuery [Violation] non-passive event (support https://github.com/ignasdamunskis/passive-events-support) -->
        <script>
            window.passiveSupport = {
                events: ['touchstart', 'touchmove']
            }
        </script>
        <script type="module" src="{{ URL::asset('javascript/passive-events-support/dist/main.js') }}"></script>

        <!-- +++++++++++ PROJECT JAVASCRIPT +++++++++++ -->
        {{-- custom modern --}}
        <script src="{{ secure_asset('javascript/modern.js') }}"></script>
        {{-- dashboard-adaptive-script --}}
        <script>
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
        </script>
        {{-- theme switcher logic --}}
        <script>
            const themeSwitcher = document.getElementById("themeSwitcher");
            themeSwitcher.addEventListener("change", function() {
                // set mode respectivly
                themeSwitcher.checked ? document.body.className = "lightMode" : document.body.className = "darkMode";
                /* set mode in contrary to prev one (cookies)
                    /app/Livewire/Templates/SideMenu.php
                    */
                Livewire.dispatch('checkedUpdateSideMenu');
            });
            themeSwitcher.checked ? document.body.className = "lightMode" : document.body.className = "darkMode";
        </script>
        {{-- optimized js --}}
        @yield('main-index-script')
        @yield('card-credentials-script')
    @endpersist
</body>

</html>
