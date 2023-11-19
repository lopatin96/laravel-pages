<section
    @if($id) id="{{ $id }}" @endif
    class="pt-24 pb-28 bg-white overflow-hidden"
>
    <div class="container px-4 mx-auto">
        <div class="text-center max-w-lg mx-auto">
            <h2 class="mb-5 text-6xl md:text-7xl font-bold font-heading text-center tracking-px-n leading-tight">
                {{ __('laravel-welcome-page::call-to-action-v2.title') }}
            </h2>
            <p class="mb-7 text-lg text-gray-600 font-medium">
                {{ __('laravel-welcome-page::call-to-action-v2.text') }}
            </p>
            <div class="mb-11 md:inline-block">
                <a href="{{ config('laravel-welcome-page.call_to_action-v2_button_path') }}">
                    <button class="py-4 px-6 w-full font-medium rounded-xl shadow-6xl focus:ring focus:outline-none focus:ring-gray-500 bg-black text-white hover:bg-gray-900 transition ease-in-out duration-200 select-none text-center" type="button">
                        {{ __('laravel-welcome-page::call-to-action-v2.button_text') }}
                    </button>
                </a>
            </div>
            <div class="flex flex-wrap items-center justify-center -m-1">
                <div class="w-auto p-1">
                    <div class="flex flex-wrap">
                        <div class="w-auto">
                            <img
                                src="{{ config('laravel-welcome-page.call_to_action-v2_avatar_1') }}"
                                alt="Avatar 1"
                                loading="lazy"
                            >
                        </div>
                        <div class="w-auto -ml-3">
                            <img
                                src="{{ config('laravel-welcome-page.call_to_action-v2_avatar_2') }}"
                                alt="Avatar 2"
                                loading="lazy"
                            >
                        </div>
                        <div class="w-auto -ml-3">
                            <img
                                src="{{ config('laravel-welcome-page.call_to_action-v2_avatar_3') }}"
                                alt="Avatar 3"
                                loading="lazy"
                            >
                        </div>
                    </div>
                </div>
                <div class="w-auto p-1">
                    <p class="text-gray-600 font-medium">
                        {{ __('laravel-welcome-page::call-to-action-v2.label') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>