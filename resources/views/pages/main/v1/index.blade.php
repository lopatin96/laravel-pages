<section
    id="main"
    class="h-full"
>
    <div class="relative overflow-hidden max-w-6xl h-full mx-auto">
        <div class="flex items-center justify-center h-full">
            <div class="w-full lg:w-3/4 p-8 lg:mb-20">
                <div class="inline-block mb-6 px-2 py-1 font-semibold opacity-90 hover:opacity-75 {{ config('laravel-welcome-page.bg_color_secondary') }} rounded-full transition ease-in-out duration-700">
                    <span class="try-now flex flex-wrap items-center -m-1 text-sm cursor-pointer">
                        <a
                            href="{{ config('laravel-welcome-page.main-v1_upper_title_path') }}"
                            class="w-auto p-1"
                        >
                            {{ __('laravel-welcome-page::main-v1.upper_title') }}
                        </a>
                        <div class="w-auto p-1">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.66667 3.41675L12.75 7.50008M12.75 7.50008L8.66667 11.5834M12.75 7.50008L2.25 7.50008"
                                      stroke="black" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                            </svg>
                        </div>
                    </span>
                </div>
                <h1 class="mb-6 text-3xl md:text-3xl lg:text-4xl font-extrabold font-heading">
                    <span class="bg-black text-white text-5xl md:text-6xl">
                        <span class="relative z-10">
                            {!! __('laravel-welcome-page::main-v1.title') !!}
                        </span><br>
                    </span>
                    <span class="bg-black text-white">
                        {{ __('laravel-welcome-page::main-v1.subtitle') }}
                        @include('laravel-welcome-page::welcome-page.main.v1.typed')
                    </span>
                </h1>
                <p class="mb-10 md:mb-24 text-lg lg:max-w-md selection:bg-black selection:text-white">
                    {!! __('laravel-welcome-page::main-v1.text') !!}
                </p>
                <div class="flex flex-col sm:flex-row space-y-5 sm:space-y-0 items-center">
                    <a
                        href="{{ config('laravel-welcome-page.main-v1_primary_button_path') }}"
                        class="inline-block md:w-96 py-4 px-6 w-full text-center text-lg text-white font-semibold rounded-xl focus:ring focus:outline-none opacity-90 hover:opacity-100 {{ config('laravel-welcome-page.main_button_color') }} transition ease-in-out duration-200 select-none"
                    >
                        {{ __('laravel-welcome-page::main-v1.primary_button_text') }}
                    </a>
                    <a
                        href="{{ config('laravel-welcome-page.main-v1_secondary_button_path') }}"
                        class="text-center sm:text-left cursor-pointer try-now py-4 px-9 w-full font-semibold hover:underline transition ease-in-out duration-200 select-none"
                    >
                        {{ __('laravel-welcome-page::main-v1.secondary_button_text') }}
                    </a>
                </div>
            </div>
            <div class="hidden lg:block relative w-full md:w-1/4 p-8">
                <lottie-player
                    src="{{ asset(config('laravel-welcome-page.main-v1_lottie_src')) }}"
                    background="transparent"
                    speed="{{ config('laravel-welcome-page.main-v1_lottie_speed') }}"
                    loop
                    autoplay
                    style="
                        width: {{ config('laravel-welcome-page.main-v1_lottie_width') }}px;
                        height: {{ config('laravel-welcome-page.main-v1_lottie_height') }}px;
                        position: absolute;
                        top: {{ config('laravel-welcome-page.main-v1_lottie_top') }}px;
                        right: {{ config('laravel-welcome-page.main-v1_lottie_right') }}px;
                    "
                ></lottie-player>
            </div>
        </div>
    </div>
    @if (config('laravel-welcome-page.main-v1_scroll_bottom_button_src'))
        @include('laravel-welcome-page::welcome-page.main.v1.scroll-bottom-block')
    @endif
</section>
