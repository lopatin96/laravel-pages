<section
    @if($id) id="{{ $id }}" @endif
    class="relative py-28 bg-gray-50 bg-gradient-to-r {{ config('laravel-welcome-page.gradient_from') }} {{ config('laravel-welcome-page.gradient_to') }} animate-gradient-x overflow-hidden"
>
    <div class="relative container px-4 max-w-7xl mx-auto">
        <div class="flex flex-wrap items-center">
            <div class="w-full md:w-1/2 p-8">
                <h2 class="mb-5 text-6xl md:text-7xl selection:bg-black selection:text-white font-bold tracking-px-n leading-tight">
                    {{ __('laravel-welcome-page::call-to-action-v1.title') }}
                </h2>
                <p class="font-medium md:max-w-md selection:bg-black selection:text-white">
                    {!! __('laravel-welcome-page::call-to-action-v1.text') !!}
                </p>
            </div>
            <div class="w-full md:w-1/2 p-8">
                <div class="flex flex-wrap ml-auto md:w-64 -m-2">
                    <div class="w-full p-2">
                        <a href="{{ config('laravel-welcome-page.call_to_action-v1_primary_button_path') }}">
                            <button
                                class="py-4 px-6 w-full font-medium rounded-xl shadow-6xl focus:ring focus:outline-none focus:ring-gray-500 bg-black text-white hover:bg-gray-900 transition ease-in-out duration-200 select-none text-center"
                                type="button"
                            >
                                {{ __('laravel-welcome-page::call-to-action-v1.primary_button_text') }}
                            </button>
                        </a>
                    </div>
                    <div class="w-full p-2 select-none">
                        <a href="{{ config('laravel-welcome-page.call_to_action-v1_secondary_button_path') }}">
                            <button class="inline-flex items-center justify-center py-4 px-6 w-full text-white font-medium border border-white border-opacity-60 hover:border-opacity-80 rounded-xl focus:ring focus:ring-white focus:ring-opacity-40 bg-transparent hover:bg-black hover:bg-opacity-5 transition ease-in-out duration-200" type="button">
                                <span>
                                    {{ __('laravel-welcome-page::call-to-action-v1.secondary_button_text') }}
                                </span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
