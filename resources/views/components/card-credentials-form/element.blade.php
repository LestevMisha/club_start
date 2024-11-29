<xcard-credentials-form class="component" data-uid="{{ $uid }}" data-js-initialized="false">
    <form class="flex flex-col gap-2">
        @csrf
        <div class="mob flex flex-row gap-2">
            <x-inputs.input.compiled :$uid :inscription="__('components/card-credentials-form.1')" attribute="card-name" />
            <x-inputs.input.compiled :$uid :inscription="__('components/card-credentials-form.2')" attribute="cvc" />
        </div>
        <div class="mob flex flex-row gap-2">
            <x-inputs.input.compiled :$uid :inscription="__('components/card-credentials-form.3')" attribute="expiration-month" />
            <x-inputs.input.compiled :$uid :inscription="__('components/card-credentials-form.4')" attribute="expiration-year" />
        </div>

        <x-inputs.credit-card-input.compiled :$uid :inscription="__('components/card-credentials-form.5')" attribute="card-number" />
        <x-consent.compiled :$uid class="dark:text-[#666666] font-normal text-[#acacac]" consentClass="text-[0.8rem] font-normal" />
    </form>
</xcard-credentials-form>
