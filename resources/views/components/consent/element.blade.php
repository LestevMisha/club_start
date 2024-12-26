<xconsent {{ $attributes->merge(['class' => 'component']) }} data-uid="{{ $uid }}">
    <div class="{{ $aclass ?? '' }}">
        {{ __('components/consent.1') }}
        <u><a class="{{ $aclass ?? '' }}" target="_blank" href="{{ route('public.privacy') }}">{{ __('components/consent.2') }}</a></u>
        {{ __('components/consent.3') }}
        <u><a class="{{ $aclass ?? '' }}" target="_blank" href="{{ route('public.public-offer') }}">{{ __('components/consent.4') }}</a></u>
        {{ __('components/consent.5') }}
    </div>
</xconsent>
