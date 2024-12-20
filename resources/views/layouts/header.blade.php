<title>{{ $title ?? 'КЛУБ START' }}</title>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="recaptcha-site-key" content="{{ config('services.google.recaptcha.site_key') }}" />
<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.google.recaptcha.site_key') }}"></script>

<link rel="preload" href="/assets/fonts/Gilroy-Bold.woff2" as="font" crossorigin="" type="font/woff2">
<link rel="preload" href="/assets/fonts/Gilroy-SemiBold.woff2" as="font" crossorigin="" type="font/woff2">
<link rel="preload" href="/assets/fonts/Gilroy-Light.woff2" as="font" crossorigin="" type="font/woff2">
<link rel="preload" href="/assets/fonts/Gilroy-Medium.woff2" as="font" crossorigin="" type="font/woff2">
<link rel="preload" href="/assets/fonts/Gilroy-Regular.woff2" as="font" crossorigin="" type="font/woff2">

@vite('resources/styles/uikit.css')
@stack('components.styles')