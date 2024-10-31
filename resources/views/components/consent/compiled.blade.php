<div class="{{ $class ?? '' }}">
    {{ __('components/consent.1') }}
    <u><a class="{{ $class ?? '' }}" target="_blank" href="{{ route('public.privacy') }}">{{ __('components/consent.2') }}</a></u>
    {{ __('components/consent.3') }}
    <u><a class="{{ $class ?? '' }}" target="_blank" href="{{ route('public.public-offer') }}">{{ __('components/consent.4') }}</a></u>
    {{ __('components/consent.5') }}
</div>
