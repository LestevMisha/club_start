<referral-link data-recaptcha-key="{{ config('services.google.recaptcha.site_key') }}">

    <x-modern-loader.compiled attribute="save-card-credentials" />
    
    <div class="flex gap_05 v">
        <form id="js-save-card-credentials-form">
            @csrf
            <x-modern-credit-card-input.compiled class="m-0" attribute="card-number" inscription="{{ __('Card Number') }}" />
        </form>
        <div class="b-text b-text_08 b-text_grey-dark">
            {{ __('By providing your credit card number, you consent to its use for the purpose of transferring referral returns of profit.') }}
        </div>
    </div>
</referral-link>
