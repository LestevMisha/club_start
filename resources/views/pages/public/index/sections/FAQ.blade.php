<section
    class="dark:bg-black dark:bg-[radial-gradient(#191919_2px,_transparent_2px)] relative -top-16 -mb-16 h-auto bg-white bg-[radial-gradient(#e6e6e6_2px,_transparent_2px)] py-24 [background-size:2rem_2rem] [mask:radial-gradient(1rem_at_50%_1rem,#000_99%,#0000_101%)_calc(50%_-_2rem)_0/4rem_100%,_radial-gradient(1rem_at_50%_0rem,#0000_99%,#000_101%)_50%_1rem/4rem_100%_repeat-x]">
    <div class="min-w-96 max-w-96 relative z-10 m-auto w-full xl:max-w-[1200px]">
        <div class="mb-12 flex h-fit flex-col items-center justify-center">
            <div class="dark:text-white relative w-fit text-center text-4xl font-bold uppercase text-black xl:text-[2.5rem]">
                {{ __('Frequent') }}
                <span
                    class="text-nowrap dark:before:bg-[#0d6efd] relative !-z-[1] uppercase before:absolute before:right-0 before:top-2/4 before:-z-10 before:block before:h-10 before:w-full before:-translate-y-1/2 before:bg-[#6fa9ff] before:p-[0.3rem] before:content-[''] before:[rotate:1deg]">
                    {{ __('Questions') }}
                </span>
            </div>
        </div>
        <!-- Accordion_v2 Dc3mzz1 -->
        <div class="js-accordion-v2 mb-5 flex w-full flex-col gap-4 xl:flex-row">
            <div class="flex w-full flex-col gap-4 xl:w-1/2">
                <div class="js-accordion-item noise-before relative rounded-2xl bg-[#00000008] p-6 backdrop-blur-[2rem] backdrop-filter">
                    <button class="js-accordion-button group/button peer/button expanded flex w-full flex-row gap-4">
                        <div class="align flex flex-row">
                            <span class="js-accordion-text dark:text-white relative text-left text-2xl font-semibold text-black xl:text-3xl">{{ __('How to pay?') }}</span>
                        </div>
                        <span
                            class="dark:border-[#ffffff66] dark:after:bg-white dark:before:bg-white relative ml-auto inline-block h-8 min-h-[2rem] w-8 min-w-[2rem] rounded-[50%] border-[1px] border-solid border-[#00000066] duration-[10ms] [transition:_all_0.225s_ease-in-out] before:absolute before:left-2/4 before:top-2/4 before:block before:h-[0.1rem] before:w-[0.6rem] before:-translate-x-1/2 before:-translate-y-1/2 before:content-normal before:bg-black before:[transition:_background-color_0.225s_ease-in-out] after:absolute after:left-2/4 after:top-2/4 after:block after:h-[0.6rem] after:w-[0.1rem] after:-translate-x-1/2 after:-translate-y-1/2 after:content-normal after:bg-black after:[transition:_background-color_0.225s_ease-in-out] group-hover/button:before:bg-[#0d6efd] group-hover/button:after:bg-[#0d6efd] group-[.expanded]/button:border-[#0d6efd] group-[.expanded]/button:after:w-0"></span>
                    </button>
                    <div class="flex max-h-0 flex-col overflow-hidden opacity-0 [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                        <div class="relative my-1 text-xl font-light text-[#acacac]">
                            {!! __(
                                'Choose a convenient payment method after completing your registration. You can pay for club access from any bank in Russia. *If you need to pay with a foreign card, please contact our customer care:',
                            ) !!}
                            <span>
                                <a class="text-[#0d6efd]" target="_blank" href="https://t.me/ClubStarthelp_bot">@ClubStarthelp_bot</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="js-accordion-item noise-before relative rounded-2xl bg-[#00000008] p-6 backdrop-blur-[2rem] backdrop-filter">
                    <button class="js-accordion-button group/button peer/button flex w-full flex-row gap-4">
                        <div class="align flex flex-row">
                            <span class="js-accordion-text dark:text-white relative text-left text-2xl font-semibold text-black xl:text-3xl">{{ __('What happens after payment?') }}</span>
                        </div>
                        <span
                            class="dark:border-[#ffffff66] dark:after:bg-white dark:before:bg-white relative ml-auto inline-block h-8 min-h-[2rem] w-8 min-w-[2rem] rounded-[50%] border-[1px] border-solid border-[#00000066] duration-[10ms] [transition:_all_0.225s_ease-in-out] before:absolute before:left-2/4 before:top-2/4 before:block before:h-[0.1rem] before:w-[0.6rem] before:-translate-x-1/2 before:-translate-y-1/2 before:content-normal before:bg-black before:[transition:_background-color_0.225s_ease-in-out] after:absolute after:left-2/4 after:top-2/4 after:block after:h-[0.6rem] after:w-[0.1rem] after:-translate-x-1/2 after:-translate-y-1/2 after:content-normal after:bg-black after:[transition:_background-color_0.225s_ease-in-out] group-hover/button:before:bg-[#0d6efd] group-hover/button:after:bg-[#0d6efd] group-[.expanded]/button:border-[#0d6efd] group-[.expanded]/button:after:w-0"></span>
                    </button>
                    <div class="flex max-h-0 flex-col overflow-hidden opacity-0 [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                        <div class="relative my-1 text-xl font-light text-[#acacac]">
                            {!! __(
                                'You will be redirected to your personal account where you will find a link to the private Telegram channel "START CLUB". Additionally, your personal account will have links to marathons, tables, club archives (showing our beginnings and what led to the current results), and other relevant links for productive work.',
                            ) !!}
                        </div>
                    </div>
                </div>
                <div class="js-accordion-item noise-before relative rounded-2xl bg-[#00000008] p-6 backdrop-blur-[2rem] backdrop-filter">
                    <button class="js-accordion-button group/button peer/button flex w-full flex-row gap-4">
                        <div class="align flex flex-row">
                            <span
                                class="js-accordion-text dark:text-white relative text-left text-2xl font-semibold text-black xl:text-3xl">{{ __('In which cities and countries can you operate?') }}</span>
                        </div>
                        <span
                            class="dark:border-[#ffffff66] dark:after:bg-white dark:before:bg-white relative ml-auto inline-block h-8 min-h-[2rem] w-8 min-w-[2rem] rounded-[50%] border-[1px] border-solid border-[#00000066] duration-[10ms] [transition:_all_0.225s_ease-in-out] before:absolute before:left-2/4 before:top-2/4 before:block before:h-[0.1rem] before:w-[0.6rem] before:-translate-x-1/2 before:-translate-y-1/2 before:content-normal before:bg-black before:[transition:_background-color_0.225s_ease-in-out] after:absolute after:left-2/4 after:top-2/4 after:block after:h-[0.6rem] after:w-[0.1rem] after:-translate-x-1/2 after:-translate-y-1/2 after:content-normal after:bg-black after:[transition:_background-color_0.225s_ease-in-out] group-hover/button:before:bg-[#0d6efd] group-hover/button:after:bg-[#0d6efd] group-[.expanded]/button:border-[#0d6efd] group-[.expanded]/button:after:w-0"></span>
                    </button>
                    <div class="flex max-h-0 flex-col overflow-hidden opacity-0 [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                        <div class="relative my-1 text-xl font-light text-[#acacac]">
                            {!! __('We have an official agreement with a logistics company, so you can sell sneakers and participate in the club in any city worldwide.') !!}
                        </div>
                    </div>
                </div>
                <div class="js-accordion-item noise-before relative rounded-2xl bg-[#00000008] p-6 backdrop-blur-[2rem] backdrop-filter">
                    <button class="js-accordion-button group/button peer/button flex w-full flex-row gap-4">
                        <div class="align flex flex-row">
                            <span class="js-accordion-text dark:text-white relative text-left text-2xl font-semibold text-black xl:text-3xl">
                                {{ __('Are the sneakers genuine?') }}
                            </span>
                        </div>
                        <span
                            class="dark:border-[#ffffff66] dark:after:bg-white dark:before:bg-white relative ml-auto inline-block h-8 min-h-[2rem] w-8 min-w-[2rem] rounded-[50%] border-[1px] border-solid border-[#00000066] duration-[10ms] [transition:_all_0.225s_ease-in-out] before:absolute before:left-2/4 before:top-2/4 before:block before:h-[0.1rem] before:w-[0.6rem] before:-translate-x-1/2 before:-translate-y-1/2 before:content-normal before:bg-black before:[transition:_background-color_0.225s_ease-in-out] after:absolute after:left-2/4 after:top-2/4 after:block after:h-[0.6rem] after:w-[0.1rem] after:-translate-x-1/2 after:-translate-y-1/2 after:content-normal after:bg-black after:[transition:_background-color_0.225s_ease-in-out] group-hover/button:before:bg-[#0d6efd] group-hover/button:after:bg-[#0d6efd] group-[.expanded]/button:border-[#0d6efd] group-[.expanded]/button:after:w-0"></span>
                    </button>
                    <div class="flex max-h-0 flex-col overflow-hidden opacity-0 [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                        <div class="relative my-1 text-xl font-light text-[#acacac]">
                            {!! __('To fully address this question, I have recorded a detailed explanation.') !!}
                        </div>
                        <audio controls preload="none">
                            <source src="{{ URL::asset('assets/audio/audio-are-genuine-sneakers.ogg') }}" type="audio/ogg">
                            {{ __('Your browser does not support the audio element.') }}
                        </audio>
                    </div>
                </div>
                <div class="js-accordion-item noise-before relative rounded-2xl bg-[#00000008] p-6 backdrop-blur-[2rem] backdrop-filter">
                    <button class="js-accordion-button group/button peer/button flex w-full flex-row gap-4">
                        <div class="align flex flex-row">
                            <span class="js-accordion-text dark:text-white relative text-left text-2xl font-semibold text-black xl:text-3xl">
                                {{ __('What is the essence of the club?') }}
                            </span>
                        </div>
                        <span
                            class="dark:border-[#ffffff66] dark:after:bg-white dark:before:bg-white relative ml-auto inline-block h-8 min-h-[2rem] w-8 min-w-[2rem] rounded-[50%] border-[1px] border-solid border-[#00000066] duration-[10ms] [transition:_all_0.225s_ease-in-out] before:absolute before:left-2/4 before:top-2/4 before:block before:h-[0.1rem] before:w-[0.6rem] before:-translate-x-1/2 before:-translate-y-1/2 before:content-normal before:bg-black before:[transition:_background-color_0.225s_ease-in-out] after:absolute after:left-2/4 after:top-2/4 after:block after:h-[0.6rem] after:w-[0.1rem] after:-translate-x-1/2 after:-translate-y-1/2 after:content-normal after:bg-black after:[transition:_background-color_0.225s_ease-in-out] group-hover/button:before:bg-[#0d6efd] group-hover/button:after:bg-[#0d6efd] group-[.expanded]/button:border-[#0d6efd] group-[.expanded]/button:after:w-0"></span>
                    </button>
                    <div class="flex max-h-0 flex-col overflow-hidden opacity-0 [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                        <div class="relative my-1 text-xl font-light text-[#acacac]">
                            {!! __(
                                'In the club, you will have the opportunity to purchase sneakers at cost price starting from one pair. You will also be granted access to marketing content for websites and social media. Moreover, you will become part of a community of sneaker sellers and receive informational support, helping you avoid many mistakes at the start.',
                            ) !!}
                        </div>
                    </div>
                </div>
                <div class="js-accordion-item noise-before relative rounded-2xl bg-[#00000008] p-6 backdrop-blur-[2rem] backdrop-filter">
                    <button class="js-accordion-button group/button peer/button flex w-full flex-row gap-4">
                        <div class="align flex flex-row">
                            <span class="js-accordion-text dark:text-white relative text-left text-2xl font-semibold text-black xl:text-3xl">
                                {{ __('Is there a return policy?') }}
                            </span>
                        </div>
                        <span
                            class="dark:border-[#ffffff66] dark:after:bg-white dark:before:bg-white relative ml-auto inline-block h-8 min-h-[2rem] w-8 min-w-[2rem] rounded-[50%] border-[1px] border-solid border-[#00000066] duration-[10ms] [transition:_all_0.225s_ease-in-out] before:absolute before:left-2/4 before:top-2/4 before:block before:h-[0.1rem] before:w-[0.6rem] before:-translate-x-1/2 before:-translate-y-1/2 before:content-normal before:bg-black before:[transition:_background-color_0.225s_ease-in-out] after:absolute after:left-2/4 after:top-2/4 after:block after:h-[0.6rem] after:w-[0.1rem] after:-translate-x-1/2 after:-translate-y-1/2 after:content-normal after:bg-black after:[transition:_background-color_0.225s_ease-in-out] group-hover/button:before:bg-[#0d6efd] group-hover/button:after:bg-[#0d6efd] group-[.expanded]/button:border-[#0d6efd] group-[.expanded]/button:after:w-0"></span>
                    </button>
                    <div class="flex max-h-0 flex-col overflow-hidden opacity-0 [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                        <div class="relative my-1 text-xl font-light text-[#acacac]">
                            {!! __(
                                'A return of sneakers is possible within 14 days. You or your client can return the sneakers to the warehouse and receive a refund. There are no refunds for the club membership. The service is considered provided from the moment of access.',
                            ) !!}
                        </div>
                    </div>
                </div>
                <div class="js-accordion-item noise-before relative rounded-2xl bg-[#00000008] p-6 backdrop-blur-[2rem] backdrop-filter">
                    <button class="js-accordion-button group/button peer/button flex w-full flex-row gap-4">
                        <div class="align flex flex-row">
                            <span class="js-accordion-text dark:text-white relative text-left text-2xl font-semibold text-black xl:text-3xl">
                                {{ __('Can you pay for the sneakers after receiving them?') }}
                            </span>
                        </div>
                        <span
                            class="dark:border-[#ffffff66] dark:after:bg-white dark:before:bg-white relative ml-auto inline-block h-8 min-h-[2rem] w-8 min-w-[2rem] rounded-[50%] border-[1px] border-solid border-[#00000066] duration-[10ms] [transition:_all_0.225s_ease-in-out] before:absolute before:left-2/4 before:top-2/4 before:block before:h-[0.1rem] before:w-[0.6rem] before:-translate-x-1/2 before:-translate-y-1/2 before:content-normal before:bg-black before:[transition:_background-color_0.225s_ease-in-out] after:absolute after:left-2/4 after:top-2/4 after:block after:h-[0.6rem] after:w-[0.1rem] after:-translate-x-1/2 after:-translate-y-1/2 after:content-normal after:bg-black after:[transition:_background-color_0.225s_ease-in-out] group-hover/button:before:bg-[#0d6efd] group-hover/button:after:bg-[#0d6efd] group-[.expanded]/button:border-[#0d6efd] group-[.expanded]/button:after:w-0"></span>
                    </button>
                    <div class="flex max-h-0 flex-col overflow-hidden opacity-0 [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                        <div class="relative my-1 text-xl font-light text-[#acacac]">
                            {!! __('Yes, when placing an order, you can specify that payment should be made after receiving the goods.') !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex w-full flex-col gap-4 xl:w-1/2">
                <div class="js-accordion-item noise-before relative rounded-2xl bg-[#00000008] p-6 backdrop-blur-[2rem] backdrop-filter">
                    <button class="js-accordion-button group/button peer/button flex w-full flex-row gap-4">
                        <div class="align flex flex-row">
                            <span class="js-accordion-text dark:text-white relative text-left text-2xl font-semibold text-black xl:text-3xl">
                                {{ __('Can sneakers be purchased by drop shipping without being in the club?') }}
                            </span>
                        </div>
                        <span
                            class="dark:border-[#ffffff66] dark:after:bg-white dark:before:bg-white relative ml-auto inline-block h-8 min-h-[2rem] w-8 min-w-[2rem] rounded-[50%] border-[1px] border-solid border-[#00000066] duration-[10ms] [transition:_all_0.225s_ease-in-out] before:absolute before:left-2/4 before:top-2/4 before:block before:h-[0.1rem] before:w-[0.6rem] before:-translate-x-1/2 before:-translate-y-1/2 before:content-normal before:bg-black before:[transition:_background-color_0.225s_ease-in-out] after:absolute after:left-2/4 after:top-2/4 after:block after:h-[0.6rem] after:w-[0.1rem] after:-translate-x-1/2 after:-translate-y-1/2 after:content-normal after:bg-black after:[transition:_background-color_0.225s_ease-in-out] group-hover/button:before:bg-[#0d6efd] group-hover/button:after:bg-[#0d6efd] group-[.expanded]/button:border-[#0d6efd] group-[.expanded]/button:after:w-0"></span>
                    </button>
                    <div class="flex max-h-0 flex-col overflow-hidden opacity-0 [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                        <div class="relative my-1 text-xl font-light text-[#acacac]">
                            {!! __('All club members benefit from low prices through drop shipping. You can gain access by paying a monthly membership fee.') !!}
                            <br /><br />
                            {!! __('If you wish to place an order without being a club member, you will be charged the regular retail price, just like any other customer.') !!}
                        </div>
                    </div>
                </div>
                <div class="js-accordion-item noise-before relative rounded-2xl bg-[#00000008] p-6 backdrop-blur-[2rem] backdrop-filter">
                    <button class="js-accordion-button group/button peer/button flex w-full flex-row gap-4">
                        <div class="align flex flex-row">
                            <span class="js-accordion-text dark:text-white relative text-left text-2xl font-semibold text-black xl:text-3xl">
                                {{ __('If this is my first business, will I be able to understand everything?') }}
                            </span>
                        </div>
                        <span
                            class="dark:border-[#ffffff66] dark:after:bg-white dark:before:bg-white relative ml-auto inline-block h-8 min-h-[2rem] w-8 min-w-[2rem] rounded-[50%] border-[1px] border-solid border-[#00000066] duration-[10ms] [transition:_all_0.225s_ease-in-out] before:absolute before:left-2/4 before:top-2/4 before:block before:h-[0.1rem] before:w-[0.6rem] before:-translate-x-1/2 before:-translate-y-1/2 before:content-normal before:bg-black before:[transition:_background-color_0.225s_ease-in-out] after:absolute after:left-2/4 after:top-2/4 after:block after:h-[0.6rem] after:w-[0.1rem] after:-translate-x-1/2 after:-translate-y-1/2 after:content-normal after:bg-black after:[transition:_background-color_0.225s_ease-in-out] group-hover/button:before:bg-[#0d6efd] group-hover/button:after:bg-[#0d6efd] group-[.expanded]/button:border-[#0d6efd] group-[.expanded]/button:after:w-0"></span>
                    </button>
                    <div class="flex max-h-0 flex-col overflow-hidden opacity-0 [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                        <div class="relative my-1 text-xl font-light text-[#acacac]">
                            {!! __('Yes, I explain every step of setting up the store in simple terms. You do not need any special knowledge or experience; you will acquire it during the process.') !!}
                        </div>
                    </div>
                </div>
                <div class="js-accordion-item noise-before relative rounded-2xl bg-[#00000008] p-6 backdrop-blur-[2rem] backdrop-filter">
                    <button class="js-accordion-button group/button peer/button flex w-full flex-row gap-4">
                        <div class="align flex flex-row">
                            <span class="js-accordion-text dark:text-white relative text-left text-2xl font-semibold text-black xl:text-3xl">
                                {{ __('Where is the club located?') }}
                            </span>
                        </div>
                        <span
                            class="dark:border-[#ffffff66] dark:after:bg-white dark:before:bg-white relative ml-auto inline-block h-8 min-h-[2rem] w-8 min-w-[2rem] rounded-[50%] border-[1px] border-solid border-[#00000066] duration-[10ms] [transition:_all_0.225s_ease-in-out] before:absolute before:left-2/4 before:top-2/4 before:block before:h-[0.1rem] before:w-[0.6rem] before:-translate-x-1/2 before:-translate-y-1/2 before:content-normal before:bg-black before:[transition:_background-color_0.225s_ease-in-out] after:absolute after:left-2/4 after:top-2/4 after:block after:h-[0.6rem] after:w-[0.1rem] after:-translate-x-1/2 after:-translate-y-1/2 after:content-normal after:bg-black after:[transition:_background-color_0.225s_ease-in-out] group-hover/button:before:bg-[#0d6efd] group-hover/button:after:bg-[#0d6efd] group-[.expanded]/button:border-[#0d6efd] group-[.expanded]/button:after:w-0"></span>
                    </button>
                    <div class="flex max-h-0 flex-col overflow-hidden opacity-0 [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                        <div class="relative my-1 text-xl font-light text-[#acacac]">
                            {!! __('The club is located in a private Telegram channel. Communication in the club happens through text, circles, broadcasts, and voice messages, just like in real chats.') !!}
                        </div>
                    </div>
                </div>
                <div class="js-accordion-item noise-before relative rounded-2xl bg-[#00000008] p-6 backdrop-blur-[2rem] backdrop-filter">
                    <button class="js-accordion-button group/button peer/button flex w-full flex-row gap-4">
                        <div class="align flex flex-row">
                            <span class="js-accordion-text dark:text-white relative text-left text-2xl font-semibold text-black xl:text-3xl">
                                {{ __('What is drop shipping?') }}
                            </span>
                        </div>
                        <span
                            class="dark:border-[#ffffff66] dark:after:bg-white dark:before:bg-white relative ml-auto inline-block h-8 min-h-[2rem] w-8 min-w-[2rem] rounded-[50%] border-[1px] border-solid border-[#00000066] duration-[10ms] [transition:_all_0.225s_ease-in-out] before:absolute before:left-2/4 before:top-2/4 before:block before:h-[0.1rem] before:w-[0.6rem] before:-translate-x-1/2 before:-translate-y-1/2 before:content-normal before:bg-black before:[transition:_background-color_0.225s_ease-in-out] after:absolute after:left-2/4 after:top-2/4 after:block after:h-[0.6rem] after:w-[0.1rem] after:-translate-x-1/2 after:-translate-y-1/2 after:content-normal after:bg-black after:[transition:_background-color_0.225s_ease-in-out] group-hover/button:before:bg-[#0d6efd] group-hover/button:after:bg-[#0d6efd] group-[.expanded]/button:border-[#0d6efd] group-[.expanded]/button:after:w-0"></span>
                    </button>
                    <div class="flex max-h-0 flex-col overflow-hidden opacity-0 [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                        <div class="relative my-1 text-xl font-light text-[#acacac]">
                            {!! __(
                                'Drop shipping is selling sneakers on order for a supplier. In the club, you can order sneakers for yourself or directly to your customers, and earn profits through transfers to your bank card.',
                            ) !!}
                        </div>
                    </div>
                </div>
                <div class="js-accordion-item noise-before relative rounded-2xl bg-[#00000008] p-6 backdrop-blur-[2rem] backdrop-filter">
                    <button class="js-accordion-button group/button peer/button flex w-full flex-row gap-4">
                        <div class="align flex flex-row">
                            <span class="js-accordion-text dark:text-white relative text-left text-2xl font-semibold text-black xl:text-3xl">
                                {{ __('How to extend/cancel the club subscription?') }}
                            </span>
                        </div>
                        <span
                            class="dark:border-[#ffffff66] dark:after:bg-white dark:before:bg-white relative ml-auto inline-block h-8 min-h-[2rem] w-8 min-w-[2rem] rounded-[50%] border-[1px] border-solid border-[#00000066] duration-[10ms] [transition:_all_0.225s_ease-in-out] before:absolute before:left-2/4 before:top-2/4 before:block before:h-[0.1rem] before:w-[0.6rem] before:-translate-x-1/2 before:-translate-y-1/2 before:content-normal before:bg-black before:[transition:_background-color_0.225s_ease-in-out] after:absolute after:left-2/4 after:top-2/4 after:block after:h-[0.6rem] after:w-[0.1rem] after:-translate-x-1/2 after:-translate-y-1/2 after:content-normal after:bg-black after:[transition:_background-color_0.225s_ease-in-out] group-hover/button:before:bg-[#0d6efd] group-hover/button:after:bg-[#0d6efd] group-[.expanded]/button:border-[#0d6efd] group-[.expanded]/button:after:w-0"></span>
                    </button>
                    <div class="flex max-h-0 flex-col overflow-hidden opacity-0 [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                        <div class="relative my-1 text-xl font-light text-[#acacac]">
                            {!! __('Payments will be automatically deducted from the card you used to pay for the club after successful payment.') !!}
                            <br /><br />
                            {!! __('To cancel your subscription, log into your personal account, select the "Settings" section, go to the "Subscription" section, and then press "Cancel".') !!}
                        </div>
                    </div>
                </div>
                <div class="js-accordion-item noise-before relative rounded-2xl bg-[#00000008] p-6 backdrop-blur-[2rem] backdrop-filter">
                    <button class="js-accordion-button group/button peer/button flex w-full flex-row gap-4">
                        <div class="align flex flex-row">
                            <span class="js-accordion-text dark:text-white relative text-left text-2xl font-semibold text-black xl:text-3xl">
                                {{ __('How will I gain access, and what should I do if there are difficulties with payment or the club?') }}
                            </span>
                        </div>
                        <span
                            class="dark:border-[#ffffff66] dark:after:bg-white dark:before:bg-white relative ml-auto inline-block h-8 min-h-[2rem] w-8 min-w-[2rem] rounded-[50%] border-[1px] border-solid border-[#00000066] duration-[10ms] [transition:_all_0.225s_ease-in-out] before:absolute before:left-2/4 before:top-2/4 before:block before:h-[0.1rem] before:w-[0.6rem] before:-translate-x-1/2 before:-translate-y-1/2 before:content-normal before:bg-black before:[transition:_background-color_0.225s_ease-in-out] after:absolute after:left-2/4 after:top-2/4 after:block after:h-[0.6rem] after:w-[0.1rem] after:-translate-x-1/2 after:-translate-y-1/2 after:content-normal after:bg-black after:[transition:_background-color_0.225s_ease-in-out] group-hover/button:before:bg-[#0d6efd] group-hover/button:after:bg-[#0d6efd] group-[.expanded]/button:border-[#0d6efd] group-[.expanded]/button:after:w-0"></span>
                    </button>
                    <div class="flex max-h-0 flex-col overflow-hidden opacity-0 [transition:all_.225s_ease-in-out] peer-[.expanded]/button:max-h-[100rem] peer-[.expanded]/button:opacity-100">
                        <div class="relative my-1 text-xl font-light text-[#acacac]">
                            {!! __('After payment, a personal account will be created for you containing all the necessary links for the Start Club.') !!}
                            <br /><br />
                            *{!! __('You will be automatically redirected to your personal account after payment.') !!}
                            <br /><br />
                            {!! __('If there are any difficulties, we will assist you. Contact our care department by stating the email used for payment. Support Telegram:') !!}
                            <a class="text-[#0d6efd]" href="https://t.me/ClubStarthelp_bot">@ClubStarthelp_bot</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-[calc(15rem * 3)] absolute -right-60 top-40 -z-[1] h-[45rem] w-60 rounded-full bg-[#0d6efd] opacity-75 blur-[5rem] filter [rotate:10deg]"></div>
        <div class="h-[calc(15rem * 3)] absolute -right-72 top-16 -z-[1] h-[45rem] w-60 rounded-full bg-[#00FF75] opacity-75 blur-[5rem] filter [rotate:10deg]"></div>
    </div>
    <div class="dark:bg-[linear-gradient(180deg,_#00000000,_#000000)] absolute left-0 right-0 z-[1] h-40 bg-[linear-gradient(180deg,_#00000000,_#FFFFFF)]"></div>
</section>
