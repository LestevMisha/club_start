<div class="flex v1">
    <div class="container container_v2 mob">

        <div class="form-wrapper">
            <div class="form-body">

                <x-loader.compiled :uid="uniqid()" attribute="store" size="2.5rem" borderRadius="2.5rem" />

                <div class="flex h space-btw mb-2">
                    <img class="b-img b-img_3em b-img_border-radius-100" src="{{ URL::asset('favicon.ico') }}" alt="logo">
                    <x-tools-stack.compiled :uid="uniqid()" />
                </div>

                <form id="js-store-form">
                    @csrf

                    <div class="flex h mob">
                        <div class="flex v w50 mob mb-2">
                            <div class="mb-1">
                                <div class="b-text b-text_2em">
                                    {{ __('pages/auth/register.1') }}
                                </div>
                            </div>
                            <div class="b-text b-text_grey-dark">
                                {{ __('pages/auth/register.2') }}
                            </div>
                        </div>
                        <div class="flex v w50 mob">
                            <div class="modern-form">
                                <div class="flex gap v w100" id="js-next-step">
                                    <x-inputs.input.compiled :uid="uniqid()" :inscription="__('pages/auth/register.3')" attribute="name" />
                                </div>
                                <button type="submit" class="modern-button">
                                    <div class="b-text w ml-a"> {{ __('pages/auth/register.4') }}</div>
                                    @svg('next-arrow', 'modern-next ml-a')
                                </button>
                                <x-consent.compiled :uid="uniqid()" class="b-text b-text_grey-dark" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <x-page-suggestions.compiled :uid="uniqid()" />
        </div>
    </div>
</div>
