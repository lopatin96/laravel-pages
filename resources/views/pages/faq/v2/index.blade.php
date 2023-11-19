<section
    @if($id) id="{{ $id }}" @endif
    class="pt-28 pb-32 bg-white overflow-hidden"
>
    <div class="container px-4 mx-auto">
        <p class="mb-5 text-sm {{ config('laravel-welcome-page.text_color_primary') }} font-semibold uppercase tracking-px">
            {{ __('laravel-welcome-page::faq-v2.upper_title') }}
        </p>
        <h2 class="mb-16 text-6xl md:text-8xl xl:text-9xl font-bold font-heading tracking-px-n leading-none">
            {{ __('laravel-welcome-page::faq-v2.title') }}
        </h2>
        <div class="mb-8 md:max-w-5xl">
            <div class="flex flex-wrap -m-4">
                @include('laravel-welcome-page::welcome-page.faq.v2.faq-card', [
                    'open' => true,
                    'question' => 'laravel-welcome-page::faq-v2.faq_1_question',
                    'answer' => 'laravel-welcome-page::faq-v2.faq_1_answer',
                ])

                @include('laravel-welcome-page::welcome-page.faq.v2.faq-card', [
                    'open' => true,
                    'question' => 'laravel-welcome-page::faq-v2.faq_2_question',
                    'answer' => 'laravel-welcome-page::faq-v2.faq_2_answer',
                ])

                @include('laravel-welcome-page::welcome-page.faq.v2.faq-card', [
                    'open' => true,
                    'question' => 'laravel-welcome-page::faq-v2.faq_3_question',
                    'answer' => 'laravel-welcome-page::faq-v2.faq_3_answer',
                ])

                @include('laravel-welcome-page::welcome-page.faq.v2.faq-card', [
                    'open' => true,
                    'question' => 'laravel-welcome-page::faq-v2.faq_4_question',
                    'answer' => 'laravel-welcome-page::faq-v2.faq_4_answer',
                ])
            </div>
        </div>
    </div>
</section>
