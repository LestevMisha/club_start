import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import cssInjectedByJsPlugin from "vite-plugin-css-injected-by-js";

export default defineConfig({
    server: {
        hmr: false,
    },
    plugins: [
        cssInjectedByJsPlugin({ relativeCSSInjection: true }),
        laravel({
            input: [

                // index js
                "resources/views/pages/public/index/scripts/accordion.js",
                "resources/views/pages/public/index/scripts/hooks.js",
                "resources/views/pages/public/index/scripts/telegram-circle-video.js",
                "resources/views/pages/public/index/scripts/modals.js",
                "resources/views/pages/public/index/scripts/modules/sneaker.js",
                "resources/views/pages/public/index/scripts/modules/swiper.js",
                // index css
                "resources/views/pages/public/index/styles/swiper.css",
                "resources/views/pages/public/index/styles/modals.css",

                // global css
                "resources/styles/uikit.css",
                "resources/styles/fonts.css",
                // global js
                "resources/javascript/main.js",

                // delete soon
                "resources/styles/global/main.css",
                "resources/styles/global/light-mode.css",


                // components
                "resources/views/components/dashboard-header/element.css",
                "resources/views/components/loader/element.css",
                "resources/views/components/read-more/element.css",
                "resources/views/components/countdown-circle/element.css",
                "resources/views/components/side-menu/element.css",
                "resources/views/components/theme-switcher/element.mjs",
                "resources/views/components/card-credentials-form/element.mjs",
                "resources/views/components/side-menu/element.mjs",
                "resources/views/components/logout-button/element.mjs",
                "resources/views/components/read-more/element.mjs",
                "resources/views/components/countdown-circle/element.mjs",
                "resources/views/components/message/element.mjs",

                /* --- INPUTS --- */
                "resources/views/components/inputs/copy-input/element.css",
                "resources/views/components/inputs/credit-card-input/element.css",
                "resources/views/components/inputs/input/element.css",

                "resources/views/components/inputs/copy-input/element.mjs",
                "resources/views/components/inputs/password-input/element.mjs",
                "resources/views/components/inputs/credit-card-input/element.mjs",
                "resources/views/components/inputs/input/element.mjs",

                /* PAGES */
                "resources/views/pages/private/dashboard/page.css",
                "resources/views/pages/public/forgot-password/page.css",
                "resources/views/pages/public/reset-password/page.css",

                "resources/views/pages/private/dashboard/page.mjs",
                "resources/views/pages/private/profile/page.mjs",
                "resources/views/pages/auth/login/page.mjs",
                "resources/views/pages/auth/register/page.mjs",
                "resources/views/pages/intermediate/telegram-verification/page.mjs",
                "resources/views/pages/public/forgot-password/page.mjs",
                "resources/views/pages/public/reset-password/page.mjs",
            ],
            refresh: false,
        }),
    ],
    resolve: {
        alias: {
            /* FILES */
            "@flexgridify": "/node_modules/flexgridify/dist/bundle.js",
            "@chart.js": "/node_modules/chart.js/dist/chart.umd.js",
            "@swiper": "/node_modules/swiper/swiper-bundle.min.mjs",
            "@swiper-css": "/node_modules/swiper/swiper-bundle.min.css",
            "@three": "/node_modules/three/build/three.module.min.js",

            /* DIRECTORIES */
            "@helpers": "/resources/javascript/helpers",
            "@apis": "/resources/javascript/apis",
            "@api-deps": "/resources/javascript/api-deps",
            "@three-jsm": "/node_modules/three/examples/jsm",
        }
    },
    build: {
        //    outDir: "public/built",
    },
});