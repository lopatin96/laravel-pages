<section
    @if($id) id="{{ $id }}" @endif
    class="relative pt-24 pb-32 bg-white"
>
    <span
        style="background-image: radial-gradient(50% 50% at 50% 50%, {{ config('laravel-welcome-page.color_secondary_hex') }} 0, hsla(0, 0%, 100%, 0) 100%);"
        class="hidden absolute opacity-[.50] pointer-events-none lg:inline-flex left-[50%] top-[100px] w-[400px] h-[400px]"
    ></span>

    <div class="relative container px-4 max-w-6xl mx-auto">
        <div class="flex flex-wrap justify-between items-end -m-2 mb-12">
            <div class="w-auto p-2">
                <h2 class="text-5xl md:text-6xl font-bold font-heading tracking-px-n leading-tight">
                    {{ __('laravel-welcome-page::testimonials-v1.title') }}
                </h2>
            </div>
        </div>
        <div class="flex flex-wrap -m-2">
            @include('laravel-welcome-page::welcome-page.testimonials.v1.testimonial-card', [
                'title' => 'laravel-welcome-page::testimonials-v1.testimonial_1_title',
                'text' => 'laravel-welcome-page::testimonials-v1.testimonial_1_text',
                'author' => 'laravel-welcome-page::testimonials-v1.testimonial_1_author',
            ])

            @include('laravel-welcome-page::welcome-page.testimonials.v1.testimonial-card', [
                'title' => 'laravel-welcome-page::testimonials-v1.testimonial_2_title',
                'text' => 'laravel-welcome-page::testimonials-v1.testimonial_2_text',
                'author' => 'laravel-welcome-page::testimonials-v1.testimonial_2_author',
            ])

            @include('laravel-welcome-page::welcome-page.testimonials.v1.testimonial-card', [
                'title' => 'laravel-welcome-page::testimonials-v1.testimonial_3_title',
                'text' => 'laravel-welcome-page::testimonials-v1.testimonial_3_text',
                'author' => 'laravel-welcome-page::testimonials-v1.testimonial_3_author',
            ])
        </div>
    </div>
</section>
