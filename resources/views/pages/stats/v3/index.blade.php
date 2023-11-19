<section
    @if($id) id="{{ $id }}" @endif
    class="relative pt-28 pb-32 {{ config('laravel-welcome-page.bg_color_primary') }} overflow-hidden"
>
    <span
        style="background-image: radial-gradient(50% 50% at 50% 50%, {{ config('laravel-welcome-page.color_secondary_hex') }} 0, hsla(0, 0%, 100%, 0) 100%);"
        class="hidden absolute opacity-[.60] pointer-events-none lg:inline-flex left-[20%] top-[30px] w-[600px] h-[600px]"
    ></span>

    <div class="relative z-10 container px-4 mx-auto">
        <div class="mb-24 border-b border-white border-opacity-10">
            <h2 class="pb-24 text-6xl md:text-8xl xl:text-10xl text-white font-bold tracking-px-n leading-none md:max-w-3xl">
                {{ __('laravel-welcome-page::stats-v3.title') }}
            </h2>
        </div>
        <div class="flex flex-wrap -m-8">
            <div class="w-full md:w-1/3 p-8">
                <p class="mb-6 text-gray-200 font-semibold leading-normal">
                    {{ __('laravel-welcome-page::stats-v3.stat_1_upper_value') }}
                </p>
                <h3 class="mb-4 text-6xl md:text-8xl xl:text-10xl text-white font-bold tracking-px-n leading-none">
                    {{ __('laravel-welcome-page::stats-v3.stat_1_value') }}
                </h3>
                <p class="text-gray-300 font-medium leading-relaxed md:w-56">
                    {{ __('laravel-welcome-page::stats-v3.stat_1_text') }}
                </p>
            </div>
            <div class="w-full md:w-1/3 p-8">
                <p class="mb-6 text-gray-200 font-semibold leading-normal">
                    {{ __('laravel-welcome-page::stats-v3.stat_2_upper_value') }}
                </p>
                <h3 class="mb-4 text-6xl md:text-8xl xl:text-10xl text-white font-bold tracking-px-n leading-none">
                    {{ __('laravel-welcome-page::stats-v3.stat_2_value') }}
                </h3>
                <p class="text-gray-300 font-medium leading-relaxed md:w-56">
                    {{ __('laravel-welcome-page::stats-v3.stat_2_text') }}
                </p>
            </div>
            <div class="w-full md:w-1/3 p-8">
                <p class="mb-6 text-gray-200 font-semibold leading-normal">
                    {{ __('laravel-welcome-page::stats-v3.stat_3_upper_value') }}
                </p>
                <h3 class="mb-4 text-6xl md:text-8xl xl:text-10xl text-white font-bold tracking-px-n leading-none">
                    {{ __('laravel-welcome-page::stats-v3.stat_3_value') }}
                </h3>
                <p class="text-gray-300 font-medium leading-relaxed md:w-56">
                    {{ __('laravel-welcome-page::stats-v3.stat_3_text') }}
                </p>
            </div>
        </div>
    </div>
</section>