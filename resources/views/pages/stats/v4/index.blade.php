<section
    @if($id) id="{{ $id }}" @endif
    class="py-24 bg-gray-100 overflow-hidden"
>
    <div class="container px-4 mx-auto">
        <div class="flex flex-wrap max-w-5xl mx-auto -m-3">
            <div class="w-full md:w-1/3 p-3">
                <div class="py-8 px-12 h-full text-center bg-white rounded-xl">
                    <h2 class="mb-3 text-6xl md:text-7xl {{ config('laravel-welcome-page.text_color_primary') }} text-center font-bold font-heading tracking-px-n leading-none">
                        {{ __('laravel-welcome-page::stats-v4.stat_1_value') }}
                    </h2>
                    <p class="text-gray-700 font-medium leading-relaxed">
                        {{ __('laravel-welcome-page::stats-v4.stat_1_text') }}
                    </p>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-3">
                <div class="py-8 px-12 h-full text-center bg-white rounded-xl">
                    <h2 class="mb-3 text-6xl md:text-7xl {{ config('laravel-welcome-page.text_color_primary') }} text-center font-bold font-heading tracking-px-n leading-none">
                        {{ __('laravel-welcome-page::stats-v4.stat_2_value') }}
                    </h2>
                    <p class="text-gray-700 font-medium leading-relaxed">
                        {{ __('laravel-welcome-page::stats-v4.stat_2_text') }}
                    </p>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-3">
                <div class="py-8 px-12 h-full text-center bg-white rounded-xl">
                    <h2 class="mb-3 text-6xl md:text-7xl {{ config('laravel-welcome-page.text_color_primary') }} text-center font-bold font-heading tracking-px-n leading-none">
                        {{ __('laravel-welcome-page::stats-v4.stat_3_value') }}
                    </h2>
                    <p class="text-gray-700 font-medium leading-relaxed">
                        {{ __('laravel-welcome-page::stats-v4.stat_3_text') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>