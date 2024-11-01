<card-credentials-form data-uid="{{ $uid }}">
    <form class="flex gap_05 v">
        @csrf
        <div class="flex h gap_05 mob">
            <x-modern-input.compiled :$uid :inscription="__('components/card-credentials-form.1')" attribute="card-name" />
            <x-modern-input.compiled :$uid :inscription="__('components/card-credentials-form.2')" attribute="cvc" />
        </div>
        <div class="flex h gap_05 mob">
            <x-modern-input.compiled :$uid :inscription="__('components/card-credentials-form.3')" attribute="expiration-month" />
            <x-modern-input.compiled :$uid :inscription="__('components/card-credentials-form.4')" attribute="expiration-year" />
        </div>

        <x-modern-credit-card-input.compiled :$uid :inscription="__('components/card-credentials-form.5')" attribute="card-number" />
        <x-consent.compiled :$uid class="b-text b-text_400 b-text_grey-dark b-text_grey-dark-to-grey_light-mode" consentClass="b-text b-text_08" />
    </form>
</card-credentials-form>
