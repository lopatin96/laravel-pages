<section
    @if($id) id="{{ $id }}" @endif
    class="relative pt-24 pb-32 bg-white overflow-hidden"
>
    <span
        style="background-image: radial-gradient(50% 50% at 50% 50%, {{ config('laravel-welcome-page.color_secondary_hex') }} 0, hsla(0, 0%, 100%, 0) 100%);"
        class="hidden absolute opacity-[.30] pointer-events-none lg:inline-flex -left-[20%] top-0 w-[640px] h-[640px]"
    ></span>
    <span
        style="background-image: radial-gradient(50% 50% at 50% 50%, {{ config('laravel-welcome-page.color_secondary_hex') }} 0, hsla(0, 0%, 100%, 0) 100%);"
        class="hidden absolute opacity-[.30] pointer-events-none lg:inline-flex -right-[20%] bottom-0 w-[640px] h-[640px]"
    ></span>

    <div class="relative z-10 container px-4 mx-auto">
        <h2 class="mb-16 text-6xl md:text-7xl font-bold font-heading text-center tracking-px-n leading-tight">
            {{ __('laravel-welcome-page::testimonials-v3.title') }}
        </h2>
        <div class="flex flex-wrap -m-3">
            @include('laravel-welcome-page::welcome-page.testimonials.v3.testimonial-card', [
                'photo' => config('laravel-welcome-page.testimonials-v3_card_1_photo'),
                'author' => 'laravel-welcome-page::testimonials-v3.testimonial_1_author',
                'link' => config('laravel-welcome-page.testimonials-v3_card_1_link'),
                'text' => 'laravel-welcome-page::testimonials-v3.testimonial_1_text',
                'time' => config('laravel-welcome-page.testimonials-v3_card_1_time'),
            ])

            @include('laravel-welcome-page::welcome-page.testimonials.v3.testimonial-card', [
                'photo' => config('laravel-welcome-page.testimonials-v3_card_2_photo'),
                'author' => 'laravel-welcome-page::testimonials-v3.testimonial_2_author',
                'link' => config('laravel-welcome-page.testimonials-v3_card_2_link'),
                'text' => 'laravel-welcome-page::testimonials-v3.testimonial_2_text',
                'time' => config('laravel-welcome-page.testimonials-v3_card_2_time'),
            ])

            @include('laravel-welcome-page::welcome-page.testimonials.v3.testimonial-card', [
                'photo' => config('laravel-welcome-page.testimonials-v3_card_3_photo'),
                'author' => 'laravel-welcome-page::testimonials-v3.testimonial_3_author',
                'link' => config('laravel-welcome-page.testimonials-v3_card_3_link'),
                'text' => 'laravel-welcome-page::testimonials-v3.testimonial_3_text',
                'time' => config('laravel-welcome-page.testimonials-v3_card_3_time'),
            ])

            @include('laravel-welcome-page::welcome-page.testimonials.v3.testimonial-card', [
                'photo' => config('laravel-welcome-page.testimonials-v3_card_3_photo'),
                'author' => 'laravel-welcome-page::testimonials-v3.testimonial_3_author',
                'link' => config('laravel-welcome-page.testimonials-v3_card_3_link'),
                'text' => 'laravel-welcome-page::testimonials-v3.testimonial_3_text',
                'time' => config('laravel-welcome-page.testimonials-v3_card_3_time'),
            ])

            @include('laravel-welcome-page::welcome-page.testimonials.v3.testimonial-card', [
                'photo' => config('laravel-welcome-page.testimonials-v3_card_3_photo'),
                'author' => 'laravel-welcome-page::testimonials-v3.testimonial_3_author',
                'link' => config('laravel-welcome-page.testimonials-v3_card_3_link'),
                'text' => 'laravel-welcome-page::testimonials-v3.testimonial_3_text',
                'time' => config('laravel-welcome-page.testimonials-v3_card_3_time'),
            ])

            @include('laravel-welcome-page::welcome-page.testimonials.v3.testimonial-card', [
                'photo' => config('laravel-welcome-page.testimonials-v3_card_3_photo'),
                'author' => 'laravel-welcome-page::testimonials-v3.testimonial_3_author',
                'link' => config('laravel-welcome-page.testimonials-v3_card_3_link'),
                'text' => 'laravel-welcome-page::testimonials-v3.testimonial_3_text',
                'time' => config('laravel-welcome-page.testimonials-v3_card_3_time'),
            ])
        </div>
    </div>
</section>
