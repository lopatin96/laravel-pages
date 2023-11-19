<section
    @if($id) id="{{ $id }}" @endif
    class="relative py-36 bg-gray-50"
>
    <span
        style="background-image: radial-gradient(50% 50% at 50% 50%, {{ config('laravel-welcome-page.color_secondary_hex') }} 0, hsla(0, 0%, 100%, 0) 100%);"
        class="hidden absolute opacity-[.50] pointer-events-none lg:inline-flex right-[20%] top-[100px] w-[640px] h-[640px]"
    ></span>

    <div class="relative container px-4 max-w-6xl mx-auto">
        <div class="flex flex-wrap lg:items-center -m-8">
            <div class="w-full md:w-1/2 p-8">
                <div class="md:max-w-md">
                    <h2 class="mb-16 lg:mb-52 text-6xl md:text-7xl font-bold font-heading tracking-px-n leading-none">
                        {{ __('laravel-welcome-page::pricing-v1.title') }}
                    </h2>
                    <h3 class="mb-6 text-3xl text-gray-900 font-bold">
                        {{ __('laravel-welcome-page::pricing-v1.subtitle') }}
                    </h3>
                    <p class="font-sans text-lg text-gray-400 leading-relaxed">
                        {{ __('laravel-welcome-page::pricing-v1.text') }}
                    </p>
                </div>
            </div>
            <div class="w-full md:w-1/2 p-8">
                <div class="md:max-w-md mx-auto overflow-hidden rounded-3xl shadow-xl">
                    <div class="p-9">
                        <span class="mb-7 inline-block text-sm text-gray-500 font-semibold uppercase tracking-px">
                            {{ __('laravel-welcome-page::pricing-v1.card_features') }}:
                        </span>
                        <ul>
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
                    </div>
                    <div class="p-9 bg-white">
                        <div class="flex flex-wrap -m-8">
                            <div class="w-full sm:w-1/2 p-8">
                                <span class="mb-2 inline-block text-sm text-gray-500 font-semibold uppercase tracking-px">
                                    {{ __('laravel-welcome-page::pricing-v1.card_upper_title') }}
                                </span>
                                <p class="text-gray-900 font-semibold leading-normal">
                                    {{ __('laravel-welcome-page::pricing-v1.card_title') }}
                                </p>
                            </div>
                            <div class="w-full sm:w-1/2 p-8 pb-3">
                                <div class="sm:max-w-max ml-auto">
                                    <p class="font-bold">
                                        <span class="text-4xl leading-tight tracking-px-n">
                                            ${{ config('spark.billables.user.plans.0.monthly_price') }}
                                        </span>
                                        <span class="text-lg text-gray-500 leading-snug tracking-px-n">
                                            {{ __('laravel-welcome-page::pricing-v1.card_per') }}
                                        </span>
                                    </p>
                                    <p class="font-medium text-gray-500 leading-relaxed">
                                        {{ __('laravel-welcome-page::pricing-v1.card_billed') }}
                                    </p>
                                    <div>
                                        <p class="text-xs text-gray-400 mt-1">
                                            {{ __('laravel-welcome-page::pricing-v1.card_subbilled') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-9">
                            <a href="{{ config('laravel-welcome-page.pricing_button_path') }}">
                                <button class="py-4 px-5 w-full text-white font-semibold rounded-xl focus:ring focus:ring-gray-500 bg-black hover:bg-gray-900 transition ease-in-out duration-200 select-none" type="button">
                                    {{ __('laravel-welcome-page::pricing-v1.card_button_text', ['days' => config('spark.billables.user.trial_days')]) }}
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
