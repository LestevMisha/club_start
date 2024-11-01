<header id="header" class="modern-header" data-uid="{{ $uid }}">
    <div class="flex w100 h align space-btw mx-auto">
        <div class="flex h fit align flex_blured">
            <div class="b-text b-text_nowrap text-header">{{ __('Club Start') }}</div>
            @svg('check-circle', 'mark-icon')
        </div>

        <div id="dashboard-link-container" class="flex h gap fit align flex_blured login_cst mob">
            <x-tools-stack.compiled :$uid class="flex h align gap" />
            <a id="dashboard-link" href="{{ route('auth.login') }}" class="b-text b-text_fit b-text_right b-text_v3">{{ __('Personal Account') }}</a>
        </div>
    </div>
</header>
