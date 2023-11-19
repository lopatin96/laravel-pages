<section
    @if($id) id="{{ $id }}" @endif
    class="relative pt-28 pb-24 bg-white overflow-hidden"
>
    <span
        style="background-image: radial-gradient(50% 50% at 50% 50%, {{ config('laravel-welcome-page.color_secondary_hex') }} 0, hsla(0, 0%, 100%, 0) 100%);"
        class="hidden absolute opacity-[.50] pointer-events-none lg:inline-flex left-[15%] top-[30px] w-[500px] h-[500px]"
    ></span>

    <div class="relative z-10 container px-4 mx-auto">
        <p class="mb-6 text-sm {{ config('laravel-welcome-page.text_color_primary') }} text-center font-semibold uppercase tracking-px">
            {{ __('laravel-welcome-page::how-it-works-v2.upper_title') }}
        </p>
        <h2 class="mb-20 text-6xl md:text-7xl text-center font-bold font-heading tracking-px-n leading-tight">
            {{ __('laravel-welcome-page::how-it-works-v2.title') }}
        </h2>
        <div class="flex flex-wrap -m-8">
            <div class="w-full md:w-1/2 lg:w-1/4 p-8">
                <div class="text-center">
                    <div class="relative z-10 bg-white w-12 h-12 mb-8 mx-auto border border-blueGray-200 rounded-full">
                        <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <img
                                class="h-8"
                                src="{{ asset(config('laravel-welcome-page.how_it_works-v2_step_1_image')) }}"
                                alt="step 1"
                                loading="lazy"
                            >
                        </div>
                        <div class="hidden lg:block absolute left-12 top-1/2 transform -translate-y-1/2 w-96 h-px bg-gray-200"></div>
                    </div>
                    <div class="md:max-w-xs mx-auto">
                        <h3 class="mb-4 font-heading text-xl font-bold font-heading leading-normal">
                            {{ __('laravel-welcome-page::how-it-works-v2.step_1_title') }}
                        </h3>
                        <p class="text-gray-600 font-medium leading-relaxed">
                            {!! __('laravel-welcome-page::how-it-works-v2.step_1_text') !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 p-8">
                <div class="text-center">
                    <div class="relative z-10 bg-white w-12 h-12 mb-8 mx-auto border border-blueGray-200 rounded-full">
                        <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <img
                                class="h-8"
                                src="{{ asset(config('laravel-welcome-page.how_it_works-v2_step_2_image')) }}"
                                alt="step 2"
                                loading="lazy"
                            >
                        </div>
                        <div class="hidden lg:block absolute left-12 top-1/2 transform -translate-y-1/2 w-96 h-px bg-gray-200"></div>
                    </div>
                    <div class="md:max-w-xs mx-auto">
                        <h3 class="mb-4 font-heading text-xl font-bold font-heading leading-normal">
                            {{ __('laravel-welcome-page::how-it-works-v2.step_2_title') }}
                        </h3>
                        <p class="text-gray-600 font-medium leading-relaxed">
                            {!! __('laravel-welcome-page::how-it-works-v2.step_2_text') !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 p-8">
                <div class="text-center">
                    <div class="relative z-10 bg-white w-12 h-12 mb-8 mx-auto border border-blueGray-200 rounded-full">
                        <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <img
                                class="h-8"
                                src="{{ asset(config('laravel-welcome-page.how_it_works-v2_step_3_image')) }}"
                                alt="step 3"
                                loading="lazy"
                            >
                        </div>
                        <div class="hidden lg:block absolute left-12 top-1/2 transform -translate-y-1/2 w-96 h-px bg-gray-200"></div>
                    </div>
                    <div class="md:max-w-xs mx-auto">
                        <h3 class="mb-4 font-heading text-xl font-bold font-heading leading-normal">
                            {{ __('laravel-welcome-page::how-it-works-v2.step_3_title') }}
                        </h3>
                        <p class="text-gray-600 font-medium leading-relaxed">
                            {!! __('laravel-welcome-page::how-it-works-v2.step_3_text') !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 p-8">
                <div class="text-center">
                    <div class="relative z-10 {{ config('laravel-welcome-page.bg_color_secondary') }} w-12 h-12 mb-8 mx-auto border border-blueGray-200 rounded-full">
                        <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.5734 0.93934C21.1591 1.52513 21.1591 2.47487 20.5734 3.06066L8.57336 15.0607C7.98757 15.6464 7.03782 15.6464 6.45204 15.0607L0.452035 9.06066C-0.133751 8.47487 -0.133751 7.52513 0.452035 6.93934C1.03782 6.35355 1.98757 6.35355 2.57336 6.93934L7.5127 11.8787L18.452 0.93934C19.0378 0.353553 19.9876 0.353553 20.5734 0.93934Z" fill="white"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="md:max-w-xs mx-auto">
                        <h3 class="mb-4 font-heading text-xl font-bold font-heading leading-normal">
                            {{ __('laravel-welcome-page::how-it-works-v2.step_4_title') }}
                        </h3>
                        <p class="text-gray-600 font-medium leading-relaxed">
                            {!! __('laravel-welcome-page::how-it-works-v2.step_4_text') !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
