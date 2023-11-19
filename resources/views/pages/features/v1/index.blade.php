<section
        @if($id) id="{{ $id }}" @endif
class="relative py-32 bg-white"
>
    <span
            style="background-image: radial-gradient(50% 50% at 50% 50%, {{ config('laravel-welcome-page.color_secondary_hex') }} 0, hsla(0, 0%, 100%, 0) 100%);"
            class="hidden absolute opacity-[.75] pointer-events-none lg:inline-flex left-[-20%] top-[-20%] w-[640px] h-[640px]"
    ></span>

    <div class="container px-4 max-w-6xl mx-auto">
        <div class="flex flex-wrap items-center">
            <div class="w-full md:w-1/2 pl-4 py-8 pr-8">
                <h2 class="mb-6 text-6xl md:text-7xl font-bold font-heading tracking-px-n leading-tight">
                    {{ __('laravel-welcome-page::features-v1.title') }}
                </h2>
                <p class="font-sans text-2xl text-gray-400 leading-relaxed md:max-w-lg">
                    {!! __('laravel-welcome-page::features-v1.text') !!}
                </p>
            </div>
            <div class="w-full md:w-1/2 p-8">
                <img
                    class="transform hover:-translate-y-4 transition ease-in-out duration-1000"
                    src="{{ asset(config('laravel-welcome-page.features-v1_image')) }}"
                    alt="Feature image"
                    loading="lazy"
                >
            </div>
        </div>
    </div>
</section>
