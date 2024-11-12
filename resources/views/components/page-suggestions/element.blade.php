<div class="flex h" data-uid="{{ $uid }}">
    <div class="flex h ml-a my-05 gap_05">
        @if (url()->current() === route('auth.register'))
            <a class="go-button v8" href="{{ route('auth.login') }}">{{ __('components/page-suggestions.4') }}</a>
        @elseif(url()->current() === route('auth.login'))
            <a class="go-button v8" href="{{ route('auth.register') }}">{{ __('components/page-suggestions.1') }}</a>
        @elseif(url()->current() === route('public.password.forgot'))
            <a class="go-button v8" href="{{ route('auth.login') }}">{{ __('components/page-suggestions.4') }}</a>
        @endif

        @if (url()->current() === route('public.password.forgot'))
            <a class="go-button v8" href="{{ route('auth.register') }}">{{ __('components/page-suggestions.1') }}</a>
        @else
            <a class="go-button v8" href="{{ route('public.password.forgot') }}">{{ __('components/page-suggestions.2') }}</a>
        @endif
        <a class="go-button v8" target="_blank" href="{{ route('public.privacy') }}">{{ __('components/page-suggestions.3') }}</a>
    </div>
</div>
