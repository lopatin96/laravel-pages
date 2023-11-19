<section
    @if($id) id="{{ $id }}" @endif
    class="py-24 bg-white"
>
    <div class="container px-4 max-w-7xl mx-auto">
        <div class="text-center space-y-3 mb-20">
            <h2 class="text-5xl sm:text-6xl md:text-7xl font-bold font-heading tracking-px-n leading-none">
                {{ __('laravel-welcome-page::how-it-works-v1.title') }}
            </h2>
            <p class="text-gray-400 text-xl leading-relaxed">
                {{ __('laravel-welcome-page::how-it-works-v1.subtitle') }}
            </p>
        </div>
        <div class="flex flex-wrap md:-m-3">
            <div class="w-full md:w-1/3 mb-32 md:p-3">
                <div class="pt-11 text-center bg-gray-100 h-96 rounded-3xl">
                    <div class="px-5">
                        <h3 class="mb-3 text-4xl font-bold font-heading leading-normal">
                            {{ __('laravel-welcome-page::how-it-works-v1.step_1_title') }}
                        </h3>
                        <p class="mb-10 text-gray-400 leading-relaxed">
                            {!! __('laravel-welcome-page::how-it-works-v1.step_1_text') !!}
                        </p>
                    </div>
                    <img
                        class="mx-auto h-48 object-cover rounded-3xl transform hover:translate-y-3 transition ease-in-out duration-1000"
                        src="{{ asset(config('laravel-welcome-page.how_it_works-v1_step_1_image')) }}"
                        alt="how it works"
                        loading="lazy"
                    >
                </div>
            </div>
            <div class="w-full md:w-1/3 mb-32 md:p-3">
                <div class="pt-11 text-center bg-gray-100 h-96 rounded-3xl">
                    <div class="px-5">
                        <h3 class="mb-3 text-4xl font-bold font-heading leading-normal">
                            {{ __('laravel-welcome-page::how-it-works-v1.step_2_title') }}
                        </h3>
                        <p class="mb-10 text-gray-400 leading-relaxed">
                            {!! __('laravel-welcome-page::how-it-works-v1.step_2_text') !!}
                        </p>
                    </div>
                    <img
                        class="mx-auto h-48 object-cover rounded-3xl transform hover:translate-y-3 transition ease-in-out duration-1000"
                        src="{{ asset(config('laravel-welcome-page.how_it_works-v1_step_2_image')) }}"
                        alt="how it works"
                        loading="lazy"
                    >
                </div>
            </div>
            <div class="w-full md:w-1/3 mb-32 md:p-3">
                <div class="pt-11 text-center bg-gray-100 h-96 rounded-3xl">
                    <div class="px-5">
                        <h3 class="mb-3 text-4xl font-bold font-heading leading-normal">
                            {{ __('laravel-welcome-page::how-it-works-v1.step_3_title') }}
                        </h3>
                        <p class="mb-10 text-gray-400 leading-relaxed">
                            {!! __('laravel-welcome-page::how-it-works-v1.step_3_text') !!}
                        </p>
                    </div>
                    <img
                        class="mx-auto h-48 object-cover rounded-3xl transform hover:translate-y-3 transition ease-in-out duration-1000"
                        src="{{ asset(config('laravel-welcome-page.how_it_works-v1_step_3_image')) }}"
                        alt="screen"
                        loading="lazy"
                    >
                </div>
            </div>
        </div>
    </div>
</section>
