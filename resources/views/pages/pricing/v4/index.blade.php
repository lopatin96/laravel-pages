<section
    @if($id) id="{{ $id }}" @endif
    class="pt-24 pb-28 bg-gray-50"
>
    <div class="container px-4 mx-auto">
        <h2 class="mb-24 text-6xl md:text-7xl font-bold font-heading text-center tracking-px-n leading-tight md:max-w-xl mx-auto">
            {{ __('laravel-welcome-page::pricing-v4.title') }}
        </h2>
        <div class="mb-24 md:max-w-6xl mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="w-full md:w-1/3 p-4">
                    <div class="flex flex-col px-9 pt-8 pb-9 h-full bg-white bg-opacity-90 border border-gray-100 rounded-3xl" style="backdrop-filter: blur(46px);">
                        <div>
                            <span class="mb-9 inline-block text-sm {{ config('laravel-welcome-page.text_color_secondary') }} font-semibold uppercase tracking-px leading-snug">
                                {{ __(config('spark.billables.user.plans.0.name')) }}
                            </span>
                            <h3 class="mb-2 text-4xl text-gray-900 font-bold leading-none">
                                ${{ config('spark.billables.user.plans.0.monthly_price') }}<span class="opacity-50">{{ __('laravel-welcome-page::pricing-v4.card_1_per') }}</span>
                            </h3>
                            <p class="mb-6 text-xs text-gray-400 mt-1">
                                {{ __('laravel-welcome-page::pricing-v4.cards_subbilled') }}
                            </p>
                            <p class="mb-9 text-gray-600 font-medium leading-relaxed">
                                {{ __(config('spark.billables.user.plans.0.short_description')) }}
                            </p>
                        </div>
                        <a href="{{ config('laravel-welcome-page.pricing_button_path') }}">
                            <button class="py-4 px-9 w-full font-semibold border border-gray-300 hover:border-gray-400 rounded-xl focus:ring focus:ring-gray-50 bg-white hover:bg-gray-50 transition ease-in-out duration-200" type="button">
                                {{ __('laravel-welcome-page::pricing-v4.card_1_button_text', ['days' => config('spark.billables.user.trial_days')]) }}
                            </button>
                        </a>
                        <ul class="mt-10">
                            @foreach(config('spark.billables.user.plans.0.features') as $planFeature)
                                <li class="mb-4 flex items-center">
                                    <span>
                                        <svg class="mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.5 10L9.16667 11.6667L12.5 8.33333M17.5 10C17.5 14.1421 14.1421 17.5 10 17.5C5.85786 17.5 2.5 14.1421 2.5 10C2.5 5.85786 5.85786 2.5 10 2.5C14.1421 2.5 17.5 5.85786 17.5 10Z" stroke="{{ config('laravel-welcome-page.color_secondary_hex') }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                    <p class="font-semibold leading-normal">
                                        {!! __($planFeature) !!}
                                    </p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4">
                    <div class="relative flex flex-col px-9 pt-8 pb-9 h-full bg-white bg-opacity-90 border border-gray-200 rounded-3xl shadow-9xl" style="backdrop-filter: blur(46px);">
                        <span
                            style="background-image: radial-gradient(50% 50% at 50% 50%, {{ config('laravel-welcome-page.color_secondary_hex') }} 0, hsla(0, 0%, 100%, 0) 100%);"
                            class="hidden absolute opacity-[.45] pointer-events-none lg:inline-flex -top-[30px] w-[640px] h-[640px]"
                        ></span>

                        <div class="relative z-10">
                            <span class="mb-9 inline-block text-sm {{ config('laravel-welcome-page.text_color_primary') }} font-semibold uppercase tracking-px leading-snug">
                                {{ __(config('spark.billables.user.plans.1.name')) }}
                            </span>
                            <h3 class="mb-2 text-4xl text-gray-900 font-bold leading-none">
                                ${{ config('spark.billables.user.plans.1.monthly_price') }}<span class="opacity-50">{{ __('laravel-welcome-page::pricing-v4.card_2_per') }}</span>
                            </h3>
                            <p class="mb-6 text-xs text-gray-400 mt-1">
                                {{ __('laravel-welcome-page::pricing-v4.cards_subbilled') }}
                            </p>
                            <p class="mb-9 text-gray-600 font-medium leading-relaxed">
                                {{ __(config('spark.billables.user.plans.1.short_description')) }}
                            </p>
                            <a href="{{ config('laravel-welcome-page.pricing_button_path') }}">
                                <button class="py-4 px-5 w-full text-white font-semibold rounded-xl focus:ring focus:ring-gray-500 bg-black hover:bg-gray-900 transition ease-in-out duration-200 select-none" type="button">
                                    {{ __('laravel-welcome-page::pricing-v4.card_2_button_text', ['days' => config('spark.billables.user.trial_days')]) }}
                                </button>
                            </a>
                            <ul class="mt-10">
                                @foreach(config('spark.billables.user.plans.1.features') as $planFeature)
                                    <li class="mb-4 flex items-center">
                                    <span>
                                        <svg class="mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.5 10L9.16667 11.6667L12.5 8.33333M17.5 10C17.5 14.1421 14.1421 17.5 10 17.5C5.85786 17.5 2.5 14.1421 2.5 10C2.5 5.85786 5.85786 2.5 10 2.5C14.1421 2.5 17.5 5.85786 17.5 10Z" stroke="{{ config('laravel-welcome-page.color_secondary_hex') }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                        <p class="font-semibold leading-normal">
                                            {!! __($planFeature) !!}
                                        </p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4">
                    <div class="flex flex-col px-9 pt-8 pb-9 h-full bg-white bg-opacity-90 border border-gray-100 rounded-3xl" style="backdrop-filter: blur(46px);">
                        <div>
                            <span class="mb-9 inline-block text-sm {{ config('laravel-welcome-page.text_color_secondary') }} font-semibold uppercase tracking-px leading-snug">
                                {{ __(config('spark.billables.user.plans.2.name')) }}
                            </span>
                            <h3 class="mb-2 text-4xl text-gray-900 font-bold leading-none">
                                ${{ config('spark.billables.user.plans.2.monthly_price') }}<span class="opacity-50">{{ __('laravel-welcome-page::pricing-v4.card_3_per') }}</span>
                            </h3>
                            <p class="mb-6 text-xs text-gray-400 mt-1">
                                {{ __('laravel-welcome-page::pricing-v4.cards_subbilled') }}
                            </p>
                            <p class="mb-9 text-gray-600 font-medium leading-relaxed">
                                {{ __(config('spark.billables.user.plans.2.short_description')) }}
                            </p>
                        </div>
                        <a href="{{ config('laravel-welcome-page.pricing_button_path') }}">
                            <button class="py-4 px-9 w-full font-semibold border border-gray-300 hover:border-gray-400 rounded-xl focus:ring focus:ring-gray-50 bg-white hover:bg-gray-50 transition ease-in-out duration-200" type="button">
                                {{ __('laravel-welcome-page::pricing-v4.card_3_button_text', ['days' => config('spark.billables.user.trial_days')]) }}
                            </button>
                        </a>
                        <ul class="mt-10">
                            @foreach(config('spark.billables.user.plans.2.features') as $planFeature)
                                <li class="mb-4 flex items-center">
                                    <span>
                                        <svg class="mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.5 10L9.16667 11.6667L12.5 8.33333M17.5 10C17.5 14.1421 14.1421 17.5 10 17.5C5.85786 17.5 2.5 14.1421 2.5 10C2.5 5.85786 5.85786 2.5 10 2.5C14.1421 2.5 17.5 5.85786 17.5 10Z" stroke="{{ config('laravel-welcome-page.color_secondary_hex') }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                    <p class="font-semibold leading-normal">
                                        {!! __($planFeature) !!}
                                    </p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
