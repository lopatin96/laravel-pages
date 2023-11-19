<section
    @if($id) id="{{ $id }}" @endif
    class="relative pt-24 pb-28 bg-gray-50 overflow-hidden"
>
    <div class="relative container px-4 mx-auto">
        <div class="md:max-w-4xl mx-auto">
            <p class="mb-7 text-sm {{ config('laravel-welcome-page.text_color_primary') }} text-center font-semibold uppercase tracking-px">
                {{ __('laravel-welcome-page::faq-v1.upper_title') }}
            </p>
            <h2 class="mb-16 text-4xl md:text-5xl xl:text-6xl text-center font-bold font-heading tracking-px-n leading-none">
                {{ __('laravel-welcome-page::faq-v1.title') }}
            </h2>

            <div class="mb-11 flex flex-col space-y-4">
                @include('laravel-welcome-page::welcome-page.faq.v1.faq-card', [
                    'open' => true,
                    'question' => 'laravel-welcome-page::faq-v1.faq_1_question',
                    'answer' => 'laravel-welcome-page::faq-v1.faq_1_answer',
                ])

                @include('laravel-welcome-page::welcome-page.faq.v1.faq-card', [
                    'open' => false,
                    'question' => 'laravel-welcome-page::faq-v1.faq_2_question',
                    'answer' => 'laravel-welcome-page::faq-v1.faq_2_answer',
                ])
            </div>

            <p class="text-gray-600 text-center font-medium">
                {!! __('laravel-welcome-page::faq-v1.contact_us', ['mailto' => config('mail.support')]) !!}
            </p>
        </div>
    </div>
</section>
