<referral-link data-recaptcha-key="{{ config('services.google.recaptcha.site_key') }}">

    <x-modern-loader.compiled attribute="save-card-credentials" />

    <div class="flex gap_05 v">
        <form id="js-save-card-credentials-form">
            @csrf
            <x-modern-credit-card-input.compiled class="m-0" attribute="card-number" inscription="{{ __('Card Number') }}" />
        </form>
        <div class="b-text b-text_08">
            <x-consent.compiled class="b-text b-text_400 b-text_grey-dark b-text_grey-dark-to-grey_light-mode" />
        </div>
    </div>
</referral-link>
