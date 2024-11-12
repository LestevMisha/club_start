import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import cssInjectedByJsPlugin from "vite-plugin-css-injected-by-js";

export default defineConfig({
    plugins: [
        cssInjectedByJsPlugin({ relativeCSSInjection: true }),
        laravel({
            input: [
                // MARK: index
                // js
                "resources/javascript/index/accordion.js",
                "resources/javascript/index/hooks.js",
                "resources/javascript/index/modules/swiper.js",
                "resources/javascript/index/modules/sneaker.js",
                "resources/javascript/index/telegram-circle-video.js",
                "resources/javascript/index/modals.js",
                // css
                "resources/styles/index/accordion.css",
                "resources/styles/index/swiper.css",
                "resources/styles/index/telegram-circle-video.css",
                "resources/styles/index/modals.css",


                // MARK: global
                // js
                "resources/javascript/global/main.js",
                "resources/javascript/global/modern-inputs.js",
                // css
                "resources/styles/global/authorization.css",
                "resources/styles/global/main.css",
                "resources/styles/global/light-mode.css",
                "resources/styles/global/user-panel.css",


                // MARK: laravel
                // js
                "resources/javascript/laravel/requests.js",
                "resources/javascript/laravel/helpers.js",

                // components
                "resources/views/components/modern-credit-card-input/element.mjs",
                "resources/views/components/modern-credit-card-input/element.css",

                "resources/views/components/modern-input/element.css",
                "resources/views/components/modern-password-input/element.css",
                "resources/views/components/modern-copy-input/element.css",
                "resources/views/components/dashboard-header/element.css",
                "resources/views/components/modern-loader/element.css",
                "resources/views/components/theme-switcher/element.css",
                "resources/views/components/language-switcher/element.css",
                "resources/views/components/read-more/element.css",
                "resources/views/components/countdown-circle/element.css",
                "resources/views/components/modern-submit-input/element.css",
                "resources/views/components/modern-submit-button/element.css",

                "resources/views/components/modern-copy-input/element.mjs",
                "resources/views/components/modern-password-input/element.mjs",
                "resources/views/components/theme-switcher/element.mjs",
                "resources/views/components/card-credentials-form/element.mjs",
                "resources/views/components/side-menu/element.mjs",
                "resources/views/components/modern-input/element.mjs",
                "resources/views/components/logout-button/element.mjs",
                "resources/views/components/read-more/element.mjs",
                "resources/views/components/countdown-circle/element.mjs",
                "resources/views/components/message/element.mjs",

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