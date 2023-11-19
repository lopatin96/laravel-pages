<section
    @if($id) id="{{ $id }}" @endif
    class="py-24 bg-white overflow-hidden"
>
    <div class="container px-4 mx-auto">
        <div class="flex flex-wrap -m-8">
            @include('laravel-welcome-page::welcome-page.testimonials.v2.testimonial-card', [
                'title' => 'laravel-welcome-page::testimonials-v2.testimonial_1_title',
                'author' => 'laravel-welcome-page::testimonials-v2.testimonial_1_author',
            ])

            @include('laravel-welcome-page::welcome-page.testimonials.v2.testimonial-card', [
                'title' => 'laravel-welcome-page::testimonials-v2.testimonial_2_title',
                'author' => 'laravel-welcome-page::testimonials-v2.testimonial_2_author',
            ])

            @include('laravel-welcome-page::welcome-page.testimonials.v2.testimonial-card', [
                'title' => 'laravel-welcome-page::testimonials-v2.testimonial_3_title',
                'author' => 'laravel-welcome-page::testimonials-v2.testimonial_3_author',
            ])
        </div>
    </div>
</section>
