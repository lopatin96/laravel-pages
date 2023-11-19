<section
    @if($id) id="{{ $id }}" @endif
    class="pt-24 pb-32 bg-white overflow-hidden"
>
    <div class="container px-4 mx-auto">
        <h2 class="mb-28 text-6xl md:text-7xl font-bold font-heading tracking-px-n leading-tight md:max-w-3lg">
            {{ __('laravel-welcome-page::how-it-works-v3.title') }}
        </h2>
        <div class="flex flex-wrap -m-8">
            <div class="w-full md:w-1/2 lg:w-1/4 p-8">
                <div class="flex flex-wrap items-center mb-7 -m-2">
                    <div class="w-auto p-2">
                        <div class="relative w-14 h-14 text-2xl text-white font-bold {{ config('laravel-welcome-page.bg_color_secondary') }} rounded-full">
                            <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">1</span>
                        </div>
                    </div>
                    <div class="flex-1 p-2">
                        <div class="w-full h-px bg-gray-200"></div>
                    </div>
                </div>
                <h3 class="text-xl font-semibold leading-normal md:max-w-xs">
                    {{ __('laravel-welcome-page::how-it-works-v3.step_1_title') }}
                </h3>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 p-8">
                <div class="flex flex-wrap items-center mb-7 -m-2">
                    <div class="w-auto p-2">
                        <div class="relative w-14 h-14 text-2xl text-white font-bold {{ config('laravel-welcome-page.bg_color_secondary') }} rounded-full">
                            <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">2</span>
                        </div>
                    </div>
                    <div class="flex-1 p-2">
                        <div class="w-full h-px bg-gray-200"></div>
                    </div>
                </div>
                <h3 class="text-xl font-semibold leading-normal md:max-w-xs">
                    {{ __('laravel-welcome-page::how-it-works-v3.step_2_title') }}
                </h3>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 p-8">
                <div class="flex flex-wrap items-center mb-7 -m-2">
                    <div class="w-auto p-2">
                        <div class="relative w-14 h-14 text-2xl text-white font-bold {{ config('laravel-welcome-page.bg_color_secondary') }} rounded-full">
                            <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">3</span>
                        </div>
                    </div>
                    <div class="flex-1 p-2">
                        <div class="w-full h-px bg-gray-200"></div>
                    </div>
                </div>
                <h3 class="text-xl font-semibold leading-normal md:max-w-xs">
                    {{ __('laravel-welcome-page::how-it-works-v3.step_3_title') }}
                </h3>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 p-8">
                <div class="flex flex-wrap items-center mb-7 -m-2">
                    <div class="w-auto p-2">
                        <div class="relative w-14 h-14 text-2xl text-white font-bold {{ config('laravel-welcome-page.bg_color_secondary') }} rounded-full">
                            <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">4</span>
                        </div>
                    </div>
                    <div class="flex-1 p-2">
                        <div class="w-full h-px bg-gray-200"></div>
                    </div>
                </div>
                <h3 class="text-xl font-semibold leading-normal md:max-w-xs">
                    {{ __('laravel-welcome-page::how-it-works-v3.step_4_title') }}
                </h3>
            </div>
        </div>
    </div>
</section>
