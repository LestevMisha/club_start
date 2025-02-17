<xcard-credentials-form {{ $attributes->merge(['class' => 'component']) }} data-uid="{{ $uid }}" data-js-initialized="false">
    <form class="flex flex-col gap-2">
        @csrf
        <div class="flex flex-col xl:flex-row gap-2">
            <x-inputs.input.compiled :$uid :inscription="__('components/card-credentials-form.1')" attribute="card-name" value="Petor Ermakov" />
            <x-inputs.input.compiled :$uid :inscription="__('components/card-credentials-form.2')" attribute="cvc" value="911" />
        </div>
        <div class="flex flex-col xl:flex-row gap-2">
            <x-inputs.input.compiled :$uid :inscription="__('components/card-credentials-form.3')" attribute="expiration-month" value="12" />
            <x-inputs.input.compiled :$uid :inscription="__('components/card-credentials-form.4')" attribute="expiration-year" value="24" />
        </div>

        <x-inputs.credit-card-input.compiled :$uid :inscription="__('components/card-credentials-form.5')" attribute="card-number" value="4242 4242 4242 4242" />
        <x-consent.compiled :$uid aclass="font-normal text-[#acacac] dark:text-[#666666]" class="text-[0.8rem] font-normal" />
    </form>
    <form id="downloadForm" name="downloadForm" method="POST">
        <input type="hidden" name="PaReq">
        <input type="hidden" name="MD">
        <input type="hidden" name="TermUrl">
    </form>
</xcard-credentials-form>
