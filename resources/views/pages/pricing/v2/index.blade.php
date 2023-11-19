<section
    @if($id) id="{{ $id }}" @endif
    class="relative pt-28 pb-36 bg-white"
>
    <div class="relative z-10 container px-4 mx-auto">
        <h2 class="mb-6 text-6xl md:text-7xl text-center font-bold font-heading tracking-px-n leading-none md:max-w-2xl mx-auto">
            {{ __('laravel-welcome-page::pricing-v2.title') }}
        </h2>
        <p class="mb-20 text-lg text-gray-900 text-center font-medium leading-normal md:max-w-lg mx-auto">
            {{ __('laravel-welcome-page::pricing-v2.text') }}
        </p>
        <div class="md:max-w-4xl mx-auto">
            <div class="flex flex-wrap items-center -m-5">
                <div class="w-full md:w-1/2 p-5">
                    <div class="bg-white bg-opacity-90 border border-gray-100 rounded-3xl shadow-2xl" style="backdrop-filter: blur(46px);">
                        <div class="border-b border-gray-100">
                            <div class="py-7 px-9">
                                <h3 class="mb-3 text-3xl text-gray-900 font-bold leading-snug">
                                    {{ __(config('spark.billables.user.plans.0.name')) }}
                                </h3>
                                <p class="text-gray-500 font-medium leading-relaxed">
                                    {{ __(config('spark.billables.user.plans.0.short_description')) }}
                                </p>
                            </div>
                        </div>
                        <div class="pt-8 pb-9 px-9">
                            <p class="mb-6 text-gray-600 font-medium leading-relaxed">
                                {{ __('laravel-welcome-page::pricing-v2.card_1_features') }}:
                            </p>
                            <ul class="mb-11">
                                @foreach(config('spark.billables.user.plans.0.features') as $planFeature)
                                    <li class="mb-4 flex items-center">
                                        <svg class="mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.5 10L9.16667 11.6667L12.5 8.33333M17.5 10C17.5 14.1421 14.1421 17.5 10 17.5C5.85786 17.5 2.5 14.1421 2.5 10C2.5 5.85786 5.85786 2.5 10 2.5C14.1421 2.5 17.5 5.85786 17.5 10Z" stroke="{{ config('laravel-welcome-page.color_secondary_hex') }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <p class="font-semibold leading-normal">
                                            {!! __($planFeature) !!}
                                        </p>
                                    </li>
                                @endforeach
                            </ul>
                            <p class="text-gray-900 font-bold text-3xl">
                                ${{ config('spark.billables.user.plans.0.monthly_price') }}{{ __('laravel-welcome-page::pricing-v2.card_1_per') }}
                            </p>
                            <p class="text-base text-gray-500 font-semibold leading-normal">
                                {{ __('laravel-welcome-page::pricing-v2.card_1_title') }}
                            </p>
                            <p class="mb-6 text-xs text-gray-400 mt-1">
                                {{ __('laravel-welcome-page::pricing-v2.cards_subbilled') }}
                            </p>
                            <div class="md:inline-block">
                                <a href="{{ config('laravel-welcome-page.pricing_button_path') }}">
                                    <button class="py-4 px-5 w-full text-white font-semibold rounded-xl focus:ring focus:ring-gray-500 bg-black hover:bg-gray-900 transition ease-in-out duration-200 select-none" type="button">
                                        {{ __('laravel-welcome-page::pricing-v2.card_1_button_text', ['days' => config('spark.billables.user.trial_days')]) }}
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 p-5">
                    <div class="bg-white bg-opacity-90 border border-gray-100 rounded-3xl shadow-2xl" style="backdrop-filter: blur(46px);">
                        <div class="border-b border-gray-100">
                            <div class="py-7 px-9">
                                <h3 class="mb-3 text-3xl text-gray-900 font-bold leading-snug">
                                    {{ __(config('spark.billables.user.plans.1.name')) }}
                                </h3>
                                <p class="text-gray-500 font-medium leading-relaxed">
                                    {{ __(config('spark.billables.user.plans.1.short_description')) }}
                                </p>
                            </div>
                        </div>
                        <div class="pt-8 pb-9 px-9">
                            <p class="mb-6 text-gray-600 font-medium leading-relaxed">
                                {{ __('laravel-welcome-page::pricing-v2.card_2_features') }}:
                            </p>
                            <ul class="mb-11">
                                @foreach(config('spark.billables.user.plans.1.features') as $planFeature)
                                    <li class="mb-4 flex items-center">
                                        <svg class="mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.5 10L9.16667 11.6667L12.5 8.33333M17.5 10C17.5 14.1421 14.1421 17.5 10 17.5C5.85786 17.5 2.5 14.1421 2.5 10C2.5 5.85786 5.85786 2.5 10 2.5C14.1421 2.5 17.5 5.85786 17.5 10Z" stroke="{{ config('laravel-welcome-page.color_secondary_hex') }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <p class="font-semibold leading-normal">
                                            {!! __($planFeature) !!}
                                        </p>
                                    </li>
                                @endforeach
                            </ul>
                            <p class="text-gray-900 font-bold text-3xl">
                                ${{ config('spark.billables.user.plans.1.monthly_price') }}{{ __('laravel-welcome-page::pricing-v2.card_2_per') }}
                            </p>
                            <p class="text-base text-gray-500 font-semibold leading-normal">
                                {{ __('laravel-welcome-page::pricing-v2.card_2_title') }}
                            </p>
                            <p class="mb-6 text-xs text-gray-400 mt-1">
                                {{ __('laravel-welcome-page::pricing-v2.cards_subbilled') }}
                            </p>
                            <div class="md:inline-block">
                                <a href="{{ config('laravel-welcome-page.pricing_button_path') }}">
                                    <button class="py-4 px-5 w-full text-white font-semibold rounded-xl focus:ring focus:ring-gray-500 bg-black hover:bg-gray-900 transition ease-in-out duration-200 select-none" type="button">
                                        {{ __('laravel-welcome-page::pricing-v2.card_2_button_text', ['days' => config('spark.billables.user.trial_days')]) }}
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 w-full py-64 bg-gradient-to-r {{ config('laravel-welcome-page.gradient_from') }} {{ config('laravel-welcome-page.gradient_to') }} animate-gradient-x"></div>
</section>
