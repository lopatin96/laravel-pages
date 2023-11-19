<section
    @if($id) id="{{ $id }}" @endif
    class="relative pt-28 pb-36 bg-gray-50 overflow-hidden"
>
    <span
        style="background-image: radial-gradient(50% 50% at 50% 50%, {{ config('laravel-welcome-page.color_secondary_hex') }} 0, hsla(0, 0%, 100%, 0) 100%);"
        class="hidden absolute opacity-[.30] pointer-events-none lg:inline-flex right-[30%] top-[60px] w-[400px] h-[400px]"
    ></span>

    <div class="container px-4 mx-auto">
        <h2 class="mb-5 text-6xl md:text-7xl font-bold font-heading text-center tracking-px-n leading-tight">
            {{ __('laravel-welcome-page::stats-v2.title') }}
        </h2>
        <p class="mb-16 text-lg text-gray-600 text-center font-medium leading-normal md:max-w-2xl mx-auto">
            {{ __('laravel-welcome-page::stats-v2.text') }}
        </p>
        <div class="md:max-w-3xl mx-auto bg-white rounded-3xl shadow-2xl">
            <div class="flex flex-wrap justify-center items-center">
                <div class="w-full md:flex-1">
                    <div class="text-center p-8 md:px-16 md:pt-9">
                        <p class="mb-4 {{ config('laravel-welcome-page.text_color_primary') }} font-semibold leading-normal">
                            {{ __('laravel-welcome-page::stats-v2.stat_1_upper_value') }}
                        </p>
                        <h2 class="mb-4 text-6xl md:text-7xl font-bold font-heading tracking-px-n leading-none">
                            {{ __('laravel-welcome-page::stats-v2.stat_1_value') }}
                        </h2>
                        <p class="text-gray-900 font-medium leading-snug">
                            {{ __('laravel-welcome-page::stats-v2.stat_1_text') }}
                        </p>
                    </div>
                </div>
                <div class="w-auto">
                    <div class="h-px w-14 md:w-px md:h-14 bg-gray-200"></div>
                </div>
                <div class="w-full md:flex-1">
                    <div class="text-center p-8 md:px-16 md:pt-9">
                        <p class="mb-4 {{ config('laravel-welcome-page.text_color_primary') }} font-semibold leading-normal">
                            {{ __('laravel-welcome-page::stats-v2.stat_2_upper_value') }}
                        </p>
                        <h2 class="mb-4 text-6xl md:text-7xl font-bold font-heading tracking-px-n leading-none">
                            {{ __('laravel-welcome-page::stats-v2.stat_2_value') }}
                        </h2>
                        <p class="text-gray-900 font-medium leading-snug">
                            {{ __('laravel-welcome-page::stats-v2.stat_2_text') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>