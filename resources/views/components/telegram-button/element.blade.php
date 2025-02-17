<xtelegram-button {{ $attributes->merge(['class' => 'component relative w-full overflow-hidden']) }} data-uid="{{ $uid }}">
    <div id="telegram-button-target" class="scale-200 opacity-1 z-10! cursor-pointer! absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
        {!! Socialite::driver('telegram')->getButton() !!}
    </div>
    <x-button.compiled :$uid :$url :$title :$icon :$target />
</xtelegram-button>
