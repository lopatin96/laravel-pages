<section
    @if($id) id="{{ $id }}" @endif
    class="pt-24 pb-32 bg-blueGray-50 overflow-hidden"
>
    <div class="container px-4 mx-auto">
        <h2 class="mb-6 text-6xl md:text-7xl xl:text-8xl font-bold font-heading tracking-px-n leading-none">
            {{ __('laravel-welcome-page::pricing-v5.title') }}
        </h2>
        <div class="mb-16">
            <p class="text-lg text-gray-900 font-medium leading-relaxed">
                {{ __('laravel-welcome-page::pricing-v5.text') }}
            </p>
        </div>
        <div class="overflow-hidden border border-blueGray-200 rounded-3xl">
            <div class="flex flex-wrap divide-y md:divide-x lg:divide-y-0 divide-blueGray-200">
                <div class="w-full md:w-1/2 lg:w-1/4">
                    <div class="px-9 pt-8 pb-11 h-full bg-white bg-opacity-90" style="backdrop-filter: blur(46px);">
                        <span class="mb-3 inline-block text-sm {{ config('laravel-welcome-page.text_color_secondary') }} font-semibold uppercase tracking-px leading-snug">
                            {{ __('laravel-welcome-page::pricing-v5.card_0_free') }}
                        </span>
                        <p class="mb-6 text-gray-500 font-medium leading-relaxed">
                            {{ __('laravel-welcome-page::pricing-v5.card_0_subfree') }}
                        </p>
                        <h3 class="mb-1 text-4xl text-gray-900 font-bold leading-tight">
                            <span>$0</span>
                            <span class="text-gray-400">{{ __('laravel-welcome-page::pricing-v5.card_0_per') }}</span>
                        </h3>
                        <p class="mb-6 text-sm text-gray-500 font-medium leading-relaxed">
                            {{ __('laravel-welcome-page::pricing-v5.card_0_subper') }}
                        </p>
                        <a href="{{ config('laravel-welcome-page.pricing_button_path') }}">
                            <button class="mb-9 py-4 px-9 w-full font-medium border border-blueGray-300 hover:border-blueGray-400 rounded-xl focus:ring focus:ring-gray-50 bg-white hover:bg-gray-50 transition ease-in-out duration-200" type="button">
                                {{ __('laravel-welcome-page::pricing-v5.card_0_button_text') }}
                            </button>
                        </a>
                        <ul class="space-y-4">
                            @foreach(config('spark.billables.user.plans.0.features') as $planFeature)
                                <li class="flex items-center">
                                    <span>
                                        @if ($loop->last)
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="text-gray-400 w-5 h-5 mr-2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        @else
                                            <svg class="mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.16699 10.8333L7.50033 14.1666L15.8337 5.83325" stroke="{{ config('laravel-welcome-page.color_primary_hex') }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        @endif
                                    </span>
                                    <p class="@if ($loop->last) text-gray-400 @endif font-semibold leading-normal">
                                        {!! __($planFeature) !!}
                                    </p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4">
                    <div class="px-9 pt-8 pb-11 h-full bg-white bg-opacity-90" style="backdrop-filter: blur(46px);">
                        <div class="relative z-10">
                            <span class="mb-3 inline-block text-sm {{ config('laravel-welcome-page.text_color_secondary') }} font-semibold uppercase tracking-px leading-snug">
                                {{ __(config('spark.billables.user.plans.0.name')) }}
                            </span>
                            <p class="mb-6 text-gray-500 font-medium leading-relaxed">
                                {{ __(config('spark.billables.user.plans.0.short_description')) }}
                            </p>
                            <h3 class="mb-12 text-4xl text-gray-900 font-bold leading-tight">
                                <span>${{ config('spark.billables.user.plans.0.monthly_price') }}</span>
                                <span class="text-gray-400">
                                    <span class="text-gray-400">{{ __('laravel-welcome-page::pricing-v5.card_1_per') }}</span>
                                </span>
                            </h3>
                            <a href="{{ config('laravel-welcome-page.pricing_button_path') }}">
                                <button class="mb-9 py-4 px-9 w-full font-medium border border-blueGray-300 hover:border-blueGray-400 rounded-xl focus:ring focus:ring-gray-50 bg-white hover:bg-gray-50 transition ease-in-out duration-200" type="button">
                                    {{ __('laravel-welcome-page::pricing-v5.card_1_button_text', ['days' => config('spark.billables.user.trial_days')]) }}
                                </button>
                            </a>
                            <ul class="space-y-4">
                                @foreach(config('spark.billables.user.plans.0.features') as $planFeature)
                                    <li class="flex items-center">
                                        <span>
                                            <svg class="mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.16699 10.8333L7.50033 14.1666L15.8337 5.83325" stroke="{{ config('laravel-welcome-page.color_primary_hex') }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
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
                <div class="w-full md:w-1/2 lg:w-1/4">
                    <div class="px-9 pt-8 pb-11 h-full bg-white bg-opacity-90" style="backdrop-filter: blur(46px);">
                        <span
                            style="background-image: radial-gradient(50% 50% at 50% 50%, {{ config('laravel-welcome-page.color_secondary_hex') }} 0, hsla(0, 0%, 100%, 0) 100%);"
                            class="hidden absolute opacity-[.20] pointer-events-none lg:inline-flex top-0 left-0 w-[640px] h-[640px]"
                        ></span>

                        <span class="mb-3 inline-block text-sm {{ config('laravel-welcome-page.text_color_primary') }} font-semibold uppercase tracking-px leading-snug">
                            {{ __(config('spark.billables.user.plans.1.name')) }}
                        </span>
                        <p class="mb-6 text-gray-500 font-medium leading-relaxed">
                            {{ __(config('spark.billables.user.plans.1.short_description')) }}
                        </p>
                        <h3 class="mb-12 text-4xl text-gray-900 font-bold leading-tight">
                            <span>${{ config('spark.billables.user.plans.1.monthly_price') }}</span>
                            <span class="text-gray-400">
                                <span class="text-gray-400">{{ __('laravel-welcome-page::pricing-v5.card_2_per') }}</span>
                            </span>
                        </h3>
                        <a href="{{ config('laravel-welcome-page.pricing_button_path') }}">
                            <button class="mb-9 py-4 px-5 w-full text-white font-semibold rounded-xl focus:ring focus:ring-gray-500 bg-black hover:bg-gray-900 transition ease-in-out duration-200 select-none" type="button">
                                {{ __('laravel-welcome-page::pricing-v5.card_2_button_text', ['days' => config('spark.billables.user.trial_days')]) }}
                            </button>
                        </a>
                        <ul class="space-y-4">
                            @foreach(config('spark.billables.user.plans.1.features') as $planFeature)
                                <li class="flex items-center">
                                    <span>
                                        <svg class="mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.16699 10.8333L7.50033 14.1666L15.8337 5.83325" stroke="{{ config('laravel-welcome-page.color_primary_hex') }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
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
                <div class="w-full md:w-1/2 lg:w-1/4">
                    <div class="px-9 pt-8 pb-11 h-full bg-white bg-opacity-90" style="backdrop-filter: blur(46px);">
                        <span class="mb-3 inline-block text-sm {{ config('laravel-welcome-page.text_color_secondary') }} font-semibold uppercase tracking-px leading-snug">
                            {{ __(config('spark.billables.user.plans.2.name')) }}
                        </span>
                        <p class="mb-6 text-gray-500 font-medium leading-relaxed">
                            {{ __(config('spark.billables.user.plans.2.short_description')) }}
                        </p>
                        <h3 class="mb-12 text-4xl text-gray-900 font-bold leading-tight">
                            <span>${{ config('spark.billables.user.plans.2.monthly_price') }}</span>
                            <span class="text-gray-400">
                                <span class="text-gray-400">{{ __('laravel-welcome-page::pricing-v5.card_3_per') }}</span>
                            </span>
                        </h3>
                        <a href="{{ config('laravel-welcome-page.pricing_button_path') }}">
                            <button class="mb-9 py-4 px-9 w-full font-medium border border-blueGray-300 hover:border-blueGray-400 rounded-xl focus:ring focus:ring-gray-50 bg-white hover:bg-gray-50 transition ease-in-out duration-200" type="button">
                                {{ __('laravel-welcome-page::pricing-v5.card_3_button_text', ['days' => config('spark.billables.user.trial_days')]) }}
                            </button>
                        </a>
                        <ul class="space-y-4">
                            @foreach(config('spark.billables.user.plans.2.features') as $planFeature)
                                <li class="flex items-center">
                                    <span>
                                        <svg class="mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.16699 10.8333L7.50033 14.1666L15.8337 5.83325" stroke="{{ config('laravel-welcome-page.color_primary_hex') }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
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
