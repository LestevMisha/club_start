<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'КЛУБ START' }}</title>

    <!-- +++++++++++ PROJECT CSS +++++++++++ -->
    <!-- Prefetch the LCP image with a high fetchpriority so it starts loading with the stylesheet. -->
    <link rel="prefetch" fetchpriority="high" as="image" href="{{ URL::asset('images/min-png/sneakers-chair-1.png') }}"
        type="image/png" />
    <link href="{{ secure_asset('styles/main.css') }}" type="text/css" rel="stylesheet">
    <link defer href="{{ secure_asset('styles/light-mode.css') }}" type="text/css" rel="stylesheet">
    @yield('main-index-styles')
</head>


<body class="{{ request()->cookie('checked') ? 'lightMode' : 'darkMode' }}">

    <div class="flex h w100 h100">
        <div id="side-menu-black-cover" class="cursor_crosshair"></div>
        <livewire:templates.side-menu />
        {{ $slot }}
    </div>

    @persist("static-javascript")
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
                Livewire.dispatch('checkedUpdateSideMenu');
            });
        </script>
        {{-- optimized js --}}
        @yield('main-index-script')
        @yield('card-credentials-script')
    @endpersist
</body>

</html>
