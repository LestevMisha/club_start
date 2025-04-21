<xpage-suggestions {{ $attributes->merge(['class' => 'component flex flex-row']) }} data-uid="{{ $uid }}">
    <div class="my-2 ml-auto flex w-full flex-row flex-wrap justify-center gap-4 xl:justify-end xl:gap-2">
        @guest
            @if (url()->current() === route('auth.register'))
                <a class="{{ $linkClasses }}" href="{{ route('auth.login') }}">{{ __('components/page-suggestions.4') }}</a>
            @elseif(url()->current() === route('auth.login'))
                <a class="{{ $linkClasses }}" href="{{ route('auth.register') }}">{{ __('components/page-suggestions.1') }}</a>
            @elseif($isPasswordRoute)
                <a class="{{ $linkClasses }}" href="{{ route('auth.login') }}">{{ __('components/page-suggestions.4') }}</a>
            @endif

            @if ($isPasswordRoute)
                <a class="{{ $linkClasses }}" href="{{ route('auth.register') }}">{{ __('components/page-suggestions.1') }}</a>
            @else
                <a class="{{ $linkClasses }}" href="{{ route('public.password.forgot') }}">{{ __('components/page-suggestions.2') }}</a>
            @endif
        @endguest
        <a class="{{ $linkClasses }}" target="_blank" href="{{ route('public.privacy') }}">{{ __('components/page-suggestions.3') }}</a>
    </div>
</xpage-suggestions>
