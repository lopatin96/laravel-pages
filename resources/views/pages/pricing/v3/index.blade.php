<section
    @if($id) id="{{ $id }}" @endif
    class="relative py-32 bg-white overflow-hidden"
>
    <span
        style="background-image: radial-gradient(50% 50% at 50% 50%, {{ config('laravel-welcome-page.color_secondary_hex') }} 0, hsla(0, 0%, 100%, 0) 100%);"
        class="hidden absolute opacity-[.45] pointer-events-none lg:inline-flex right-[17%] top-[20px] w-[640px] h-[640px]"
    ></span>

    <div class="container px-4 mx-auto">
        <div class="flex flex-wrap -m-8">
            <div class="w-full md:w-1/2 p-8">
                <div class="flex flex-col justify-between h-full md:max-w-md">
                    <div>
                        <h2 class="mb-8 text-6xl md:text-8xl xl:text-9xl font-bold font-heading tracking-px-n leading-none">
                            {{ __('laravel-welcome-page::pricing-v3.title') }}
                        </h2>
                        <p class="mb-16 font-medium text-gray-600 leading-relaxed">
                            {{ __('laravel-welcome-page::pricing-v3.text') }}
                        </p>
                    </div>
                    <div>
                        <h3 class="mb-3 text-gray-900 font-semibold">
                            {{ __('laravel-welcome-page::pricing-v3.label') }}
                        </h3>
                        <div class="flex flex-wrap items-center -m-1">
                            <div class="w-auto p-1">
                                <div class="flex flex-wrap -m-0.5">
                                    <div class="w-auto p-0.5">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.707 1.21267C8.02812 0.224357 9.42632 0.224357 9.74744 1.21267L10.8948 4.74387C11.0384 5.18586 11.4503 5.48511 11.915 5.48511H15.6279C16.6671 5.48511 17.0992 6.81488 16.2585 7.42569L13.2547 9.60809C12.8787 9.88126 12.7214 10.3654 12.865 10.8074L14.0123 14.3386C14.3335 15.327 13.2023 16.1488 12.3616 15.538L9.35775 13.3556C8.98178 13.0824 8.47266 13.0824 8.09669 13.3556L5.09287 15.538C4.25216 16.1488 3.12099 15.327 3.44211 14.3386L4.58947 10.8074C4.73308 10.3654 4.57575 9.88126 4.19978 9.60809L1.19596 7.42569C0.355248 6.81488 0.787317 5.48511 1.82649 5.48511H5.53942C6.00415 5.48511 6.41603 5.18586 6.55964 4.74387L7.707 1.21267Z" fill="{{ config('laravel-welcome-page.color_secondary_hex') }}"></path>
                                        </svg>
                                    </div>
                                    <div class="w-auto p-0.5">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.707 1.21267C8.02812 0.224357 9.42632 0.224357 9.74744 1.21267L10.8948 4.74387C11.0384 5.18586 11.4503 5.48511 11.915 5.48511H15.6279C16.6671 5.48511 17.0992 6.81488 16.2585 7.42569L13.2547 9.60809C12.8787 9.88126 12.7214 10.3654 12.865 10.8074L14.0123 14.3386C14.3335 15.327 13.2023 16.1488 12.3616 15.538L9.35775 13.3556C8.98178 13.0824 8.47266 13.0824 8.09669 13.3556L5.09287 15.538C4.25216 16.1488 3.12099 15.327 3.44211 14.3386L4.58947 10.8074C4.73308 10.3654 4.57575 9.88126 4.19978 9.60809L1.19596 7.42569C0.355248 6.81488 0.787317 5.48511 1.82649 5.48511H5.53942C6.00415 5.48511 6.41603 5.18586 6.55964 4.74387L7.707 1.21267Z" fill="{{ config('laravel-welcome-page.color_secondary_hex') }}"></path>
                                        </svg>
                                    </div>
                                    <div class="w-auto p-0.5">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.707 1.21267C8.02812 0.224357 9.42632 0.224357 9.74744 1.21267L10.8948 4.74387C11.0384 5.18586 11.4503 5.48511 11.915 5.48511H15.6279C16.6671 5.48511 17.0992 6.81488 16.2585 7.42569L13.2547 9.60809C12.8787 9.88126 12.7214 10.3654 12.865 10.8074L14.0123 14.3386C14.3335 15.327 13.2023 16.1488 12.3616 15.538L9.35775 13.3556C8.98178 13.0824 8.47266 13.0824 8.09669 13.3556L5.09287 15.538C4.25216 16.1488 3.12099 15.327 3.44211 14.3386L4.58947 10.8074C4.73308 10.3654 4.57575 9.88126 4.19978 9.60809L1.19596 7.42569C0.355248 6.81488 0.787317 5.48511 1.82649 5.48511H5.53942C6.00415 5.48511 6.41603 5.18586 6.55964 4.74387L7.707 1.21267Z" fill="{{ config('laravel-welcome-page.color_secondary_hex') }}"></path>
                                        </svg>
                                    </div>
                                    <div class="w-auto p-0.5">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.707 1.21267C8.02812 0.224357 9.42632 0.224357 9.74744 1.21267L10.8948 4.74387C11.0384 5.18586 11.4503 5.48511 11.915 5.48511H15.6279C16.6671 5.48511 17.0992 6.81488 16.2585 7.42569L13.2547 9.60809C12.8787 9.88126 12.7214 10.3654 12.865 10.8074L14.0123 14.3386C14.3335 15.327 13.2023 16.1488 12.3616 15.538L9.35775 13.3556C8.98178 13.0824 8.47266 13.0824 8.09669 13.3556L5.09287 15.538C4.25216 16.1488 3.12099 15.327 3.44211 14.3386L4.58947 10.8074C4.73308 10.3654 4.57575 9.88126 4.19978 9.60809L1.19596 7.42569C0.355248 6.81488 0.787317 5.48511 1.82649 5.48511H5.53942C6.00415 5.48511 6.41603 5.18586 6.55964 4.74387L7.707 1.21267Z" fill="{{ config('laravel-welcome-page.color_secondary_hex') }}"></path>
                                        </svg>
                                    </div>
                                    <div class="w-auto p-0.5">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.707 1.21267C8.02812 0.224357 9.42632 0.224357 9.74744 1.21267L10.8948 4.74387C11.0384 5.18586 11.4503 5.48511 11.915 5.48511H15.6279C16.6671 5.48511 17.0992 6.81488 16.2585 7.42569L13.2547 9.60809C12.8787 9.88126 12.7214 10.3654 12.865 10.8074L14.0123 14.3386C14.3335 15.327 13.2023 16.1488 12.3616 15.538L9.35775 13.3556C8.98178 13.0824 8.47266 13.0824 8.09669 13.3556L5.09287 15.538C4.25216 16.1488 3.12099 15.327 3.44211 14.3386L4.58947 10.8074C4.73308 10.3654 4.57575 9.88126 4.19978 9.60809L1.19596 7.42569C0.355248 6.81488 0.787317 5.48511 1.82649 5.48511H5.53942C6.00415 5.48511 6.41603 5.18586 6.55964 4.74387L7.707 1.21267Z" fill="{{ config('laravel-welcome-page.color_secondary_hex') }}"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="w-auto p-1">
                                <div class="flex flex-wrap -m-0.5">
                                    <div class="w-auto p-0.5">
                                        <p class="text-gray-900 font-bold">
                                            {{ __('laravel-welcome-page::pricing-v3.sublabel_1') }}
                                        </p>
                                    </div>
                                    <div class="w-auto p-0.5">
                                        <p class="text-gray-600 font-medium">
                                            {{ __('laravel-welcome-page::pricing-v3.sublabel_2') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 p-8">
                <div class="flex flex-wrap -m-3">
                    <div class="w-full xl:w-1/2 p-3">
                        <div class="px-8 py-7 h-full bg-white bg-opacity-80 border border-blueGray100 rounded-xl" style="backdrop-filter: blur(46px);">
                            <span class="mb-2 inline-block font-medium leading-relaxed">
                                {{ config('spark.billables.user.plans.0.name') }}
                            </span>
                            <h3 class="mb-3 text-6xl md:text-7xl font-bold font-heading tracking-px-n leading-tight">
                                ${{ config('spark.billables.user.plans.0.monthly_price') }}
                            </h3>
                            <p class="mb-12 text-gray-600 font-medium leading-relaxed">
                                {{ config('spark.billables.user.plans.0.short_description') }}
                            </p>
                            <a href="{{ config('laravel-welcome-page.pricing_button_path') }}">
                                <button class="mb-9 py-4 px-5 w-full text-white font-semibold rounded-xl focus:ring focus:ring-gray-500 bg-black hover:bg-gray-900 transition ease-in-out duration-200 select-none" type="button">
                                    {{ __('laravel-welcome-page::pricing-v3.card_1_button_text', ['days' => config('spark.billables.user.trial_days')]) }}
                                </button>
                            </a>
                            <h3 class="mb-5 font-semibold leading-normal">
                                {{ __('laravel-welcome-page::pricing-v3.card_1_features') }}:
                            </h3>
                            <ul>
                                @foreach(config('spark.billables.user.plans.0.features') as $planFeature)
                                    <li class="mb-1.5 text-gray-600 font-medium leading-normal">
                                        {!! __($planFeature) !!}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="w-full xl:w-1/2 p-3">
                        <div class="px-8 py-7 h-full bg-white bg-opacity-80 border border-blueGray100 rounded-xl" style="backdrop-filter: blur(46px);">
                            <span class="mb-2 inline-block font-medium leading-relaxed">
                                {{ config('spark.billables.user.plans.1.name') }}
                            </span>
                            <h3 class="mb-3 text-6xl md:text-7xl font-bold font-heading tracking-px-n leading-tight">
                                ${{ config('spark.billables.user.plans.1.monthly_price') }}
                            </h3>
                            <p class="mb-12 text-gray-600 font-medium leading-relaxed">
                                {{ config('spark.billables.user.plans.1.short_description') }}
                            </p>
                            <a href="{{ config('laravel-welcome-page.pricing_button_path') }}">
                                <button class="mb-9 py-4 px-5 w-full text-white font-semibold rounded-xl focus:ring focus:ring-gray-500 bg-black hover:bg-gray-900 transition ease-in-out duration-200 select-none" type="button">
                                    {{ __('laravel-welcome-page::pricing-v3.card_2_button_text', ['days' => config('spark.billables.user.trial_days')]) }}
                                </button>
                            </a>
                            <h3 class="mb-5 font-semibold leading-normal">
                                {{ __('laravel-welcome-page::pricing-v3.card_2_features') }}:
                            </h3>
                            <ul>
                                @foreach(config('spark.billables.user.plans.1.features') as $planFeature)
                                    <li class="mb-1.5 text-gray-600 font-medium leading-normal">
                                        {!! __($planFeature) !!}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
