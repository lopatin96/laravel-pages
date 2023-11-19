<section
    @if($id) id="{{ $id }}" @endif
    class="relative pt-24 pb-28 bg-white overflow-hidden"
>
    <span
        style="background-image: radial-gradient(50% 50% at 50% 50%, {{ config('laravel-welcome-page.color_secondary_hex') }} 0, hsla(0, 0%, 100%, 0) 100%);"
        class="hidden absolute opacity-[.50] pointer-events-none lg:inline-flex right-[20%] top-[30px] w-[500px] h-[500px]"
    ></span>

    <div class="relative z-10 container px-4 mx-auto">
        <div class="flex flex-wrap -m-8">
            <div class="w-full md:w-auto p-8">
                <a href="#">
                    <img
                        class="mx-auto transform hover:translate-y-4 transition ease-in-out duration-1000"
                        src="{{ config('laravel-welcome-page.call_to_action-v3_photo_1') }}"
                        alt="Photo 1"
                        loading="lazy"
                    >
                </a>
            </div>
            <div class="w-full md:flex-1 p-8">
                <div class="md:max-w-2xl mx-auto text-center">
                    <h2 class="mb-10 text-6xl md:text-7xl font-bold font-heading text-center tracking-px-n leading-tight">
                        {{ __('laravel-welcome-page::call-to-action-v3.title') }}
                    </h2>
                    <div class="mb-12 md:inline-block">
                        <a href="{{ config('laravel-welcome-page.call_to_action-v3_button_path') }}">
                            <button class="py-4 px-6 w-full font-medium rounded-xl shadow-6xl focus:ring focus:outline-none focus:ring-gray-500 bg-black text-white hover:bg-gray-900 transition ease-in-out duration-200 select-none text-center" type="button">
                                {{ __('laravel-welcome-page::call-to-action-v3.button_text', ['days' => config('spark.billables.user.trial_days')]) }}
                            </button>
                        </a>
                    </div>
                    <div class="md:max-w-sm mx-auto">
                        <div class="flex flex-wrap -m-2">
                            <div class="w-auto p-2">
                                <svg class="mt-1" width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 20V14.2777C0 12.6321 0.306867 10.921 0.920601 9.14446C1.55293 7.34923 2.40844 5.65685 3.48712 4.06732C4.58441 2.45909 5.81187 1.10332 7.16953 0L11.8562 3.0575C10.7589 4.72183 9.83834 6.46096 9.09442 8.2749C8.3691 10.0701 8.01574 12.0524 8.03433 14.2216V20H0ZM14.1438 20V14.2777C14.1438 12.6321 14.4506 10.921 15.0644 9.14446C15.6967 7.34923 16.5522 5.65685 17.6309 4.06732C18.7282 2.45909 19.9557 1.10332 21.3133 0L26 3.0575C24.9027 4.72183 23.9821 6.46096 23.2382 8.2749C22.5129 10.0701 22.1595 12.0524 22.1781 14.2216V20H14.1438Z" fill="#E0E7FF"></path>
                                </svg>
                            </div>
                            <div class="flex-1 p-2">
                                <p class="mb-4 text-lg font-medium leading-normal text-left">
                                    {{ __('laravel-welcome-page::call-to-action-v3.comment') }}
                                </p>
                                <h3 class="font-bold text-left">
                                    {{ __('laravel-welcome-page::call-to-action-v3.author') }}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-auto self-end p-8">
                <img
                    class="mx-auto transform hover:-translate-y-4 transition ease-in-out duration-1000"
                    src="{{ config('laravel-welcome-page.call_to_action-v3_photo_2') }}"
                    alt="Photo 2"
                    loading="lazy"
                >
            </div>
        </div>
    </div>
</section>