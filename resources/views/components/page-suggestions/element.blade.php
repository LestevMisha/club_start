<div class="flex h" data-uid="{{ $uid }}">
    <div class="flex h ml-a my-05 gap_05">
        <a class="go-button v8"
            href="{{ url()->current() === route('auth.register') ? route('auth.login') : route('auth.register') }}">{{ url()->current() === route('auth.register') ? __('components/page-suggestions.4') : __('components/page-suggestions.1') }}</a>
        <a class="go-button v8" href="{{ route('public.password.forgot') }}">{{ __('components/page-suggestions.2') }}</a>
        <a class="go-button v8" target="_blank" href="{{ route('public.privacy') }}">{{ __('components/page-suggestions.3') }}</a>
    </div>
</div>
