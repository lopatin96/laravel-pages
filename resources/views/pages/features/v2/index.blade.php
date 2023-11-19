<section
    @if($id) id="{{ $id }}" @endif
    class="pt-28 pb-36 bg-white overflow-hidden"
>
    <div class="container px-4 mx-auto">
        <div class="mb-20 flex flex-wrap items-end -m-8">
            <div class="w-full md:w-1/2 p-8">
                <h2 class="text-6xl md:text-7xl font-bold font-heading tracking-px-n leading-tight md:max-w-xl">
                    {{ __('laravel-welcome-page::features-v2.title') }}
                </h2>
            </div>
            <div class="w-full md:w-1/2 p-8">
                <p class="text-lg text-gray-900 font-medium leading-relaxed md:max-w-lg">
                    {{ __('laravel-welcome-page::features-v2.text') }}
                </p>
            </div>
        </div>
        <div class="flex flex-wrap -m-3">
            <div class="w-full md:w-1/3 p-3">
                <a class="flex justify-center md:block h-full" href="#">
                    <div class="relative h-full rounded-3xl overflow-hidden">
                        <img
                            class="h-full md:w-full object-cover transform hover:scale-105 transition ease-in-out duration-1000"
                            src="{{ asset(config('laravel-welcome-page.features-v2_image_1')) }}"
                            alt="Feature 1"
                            loading="lazy"
                        >
                        <div class="absolute bottom-0 left-0 w-full px-11 pb-10">
                            <div class="px-8 py-4 bg-white bg-opacity-10 rounded-xl shadow-5xl" style="-webkit-backdrop-filter: blur(5px); backdrop-filter: blur(5px);">
                                <h3 class="text-lg text-white text-center font-semibold">
                                    {{ __('laravel-welcome-page::features-v2.card_1_title') }}
                                </h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full md:w-1/3 p-3">
                <a class="flex justify-center md:block h-full" href="#">
                    <div class="relative h-full rounded-3xl overflow-hidden">
                        <img
                            class="h-full md:w-full object-cover transform hover:scale-105 transition ease-in-out duration-1000"
                            src="{{ asset(config('laravel-welcome-page.features-v2_image_2')) }}"
                            alt="Feature 2"
                            loading="lazy"
                        >
                        <div class="absolute bottom-0 left-0 w-full px-11 pb-10">
                            <div class="px-8 py-4 bg-white bg-opacity-10 rounded-xl shadow-5xl" style="-webkit-backdrop-filter: blur(5px); backdrop-filter: blur(5px);">
                                <h3 class="text-lg text-white text-center font-semibold">
                                    {{ __('laravel-welcome-page::features-v2.card_2_title') }}
                                </h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full md:w-1/3 p-3">
                <a class="flex justify-center md:block h-full" href="#">
                    <div class="relative h-full rounded-3xl overflow-hidden">
                        <img
                            class="h-full md:w-full object-cover transform hover:scale-105 transition ease-in-out duration-1000"
                            src="{{ asset(config('laravel-welcome-page.features-v2_image_3')) }}"
                            alt="Feature 3"
                            loading="lazy"
                        >
                        <div class="absolute bottom-0 left-0 w-full px-11 pb-10">
                            <div class="px-8 py-4 bg-white bg-opacity-10 rounded-xl shadow-5xl" style="-webkit-backdrop-filter: blur(5px); backdrop-filter: blur(5px);">
                                <h3 class="text-lg text-white text-center font-semibold">
                                    {{ __('laravel-welcome-page::features-v2.card_3_title') }}
                                </h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
