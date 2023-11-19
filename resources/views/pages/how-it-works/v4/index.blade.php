<section
    @if($id) id="{{ $id }}" @endif
    class="py-32 bg-white overflow-hidden"
>
    <div class="container px-4 mx-auto">
        <div class="flex flex-wrap -m-8">
            <div class="w-full md:w-1/2 p-8">
                <div class="md:max-w-lg">
                    <h2 class="mb-5 text-6xl md:text-7xl font-bold font-heading tracking-px-n leading-tight">
                        {{ __('laravel-welcome-page::how-it-works-v4.title') }}
                    </h2>
                    <p class="text-gray-600 font-medium leading-relaxed">
                        {{ __('laravel-welcome-page::how-it-works-v4.text') }}
                    </p>
                </div>
            </div>
            <div class="w-full md:w-1/2 p-8">
                <div class="flex flex-wrap">
                    <div class="w-full">
                        <div class="flex flex-wrap -m-7">
                            <div class="w-auto p-7">
                                <div class="relative w-11 h-11 border border-gray-200 rounded-full">
                                    <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                        <img
                                            class="h-8"
                                            src="{{ asset(config('laravel-welcome-page.how_it_works-v4_step_1_image')) }}"
                                            alt="step 1"
                                            loading="lazy"
                                        >
                                    </div>
                                </div>
                                <div class="w-px h-28 bg-gray-200 mx-auto"></div>
                            </div>
                            <div class="flex-1 p-7">
                                <div class="md:max-w-sm pb-8">
                                    <h3 class="mb-4 text-xl font-semibold leading-normal">
                                        {{ __('laravel-welcome-page::how-it-works-v4.step_1_title') }}
                                    </h3>
                                    <p class="text-gray-600 font-medium leading-relaxed">
                                        {{ __('laravel-welcome-page::how-it-works-v4.step_1_text') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="flex flex-wrap -m-7">
                            <div class="w-auto p-7">
                                <div class="relative w-11 h-11 border border-gray-200 rounded-full">
                                    <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                        <img
                                            class="h-8"
                                            src="{{ asset(config('laravel-welcome-page.how_it_works-v4_step_2_image')) }}"
                                            alt="step 2"
                                            loading="lazy"
                                        >
                                    </div>
                                </div>
                                <div class="w-px h-36 bg-gray-200 mx-auto"></div>
                            </div>
                            <div class="flex-1 p-7">
                                <div class="md:max-w-sm pb-8">
                                    <h3 class="mb-4 text-xl font-semibold leading-normal">
                                        {{ __('laravel-welcome-page::how-it-works-v4.step_2_title') }}
                                    </h3>
                                    <p class="text-gray-600 font-medium leading-relaxed">
                                        {{ __('laravel-welcome-page::how-it-works-v4.step_2_text') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="flex flex-wrap -m-7">
                            <div class="w-auto p-7">
                                <div class="relative w-11 h-11 border border-gray-200 rounded-full">
                                    <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                        <img
                                            class="h-8"
                                            src="{{ asset(config('laravel-welcome-page.how_it_works-v4_step_3_image')) }}"
                                            alt="step 3"
                                            loading="lazy"
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1 p-7">
                                <div class="md:max-w-sm pb-8">
                                    <h3 class="mb-4 text-xl font-semibold leading-normal">
                                        {{ __('laravel-welcome-page::how-it-works-v4.step_3_title') }}
                                    </h3>
                                    <p class="text-gray-600 font-medium leading-relaxed">
                                        {{ __('laravel-welcome-page::how-it-works-v4.step_3_text') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
