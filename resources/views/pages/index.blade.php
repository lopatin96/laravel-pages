<x-guest-layout>
    <x-laravel-seo::title title="{{ $page }}.title" />

    @php
        if ($variant = request()->get('variant') ?? request()->cookie('variant')) {
            $variantPrefix = $variant . '-';
        }
    @endphp


    @if(config("laravel-pages.pages.$page.sections.main"))
        <div
        x-data="{ lgHScreen: window.innerWidth / window.innerHeight < 2.2 }"
        @resize.window="lgHScreen = window.innerWidth / window.innerHeight < 2.2"
        class="flex flex-col bg-gradient-to-r {{ config('laravel-pages.gradient_from') }} {{ config('laravel-pages.gradient_to') }} animate-gradient-x lg:h-screen"
        :class="{'lg:h-screen': lgHScreen}"
        >
            @include(config('laravel-pages.header_path'), ['showLinks' => true])

            @if(
                isset($variant)
                && array_key_exists('variants', config("laravel-pages.pages.$page.sections.main"))
                && in_array($variant, config("laravel-pages.pages.$page.sections.main.variants"))
            )
                @include("pages.$page.$variantPrefix" . config("laravel-pages.pages.$page.sections.main.name"))
            @else
                @include("pages.$page." . config("laravel-pages.pages.$page.sections.main.name"))
            @endif
        </div>
    @else
        @include(config('laravel-pages.header_path'), ['showLinks' => true])
    @endisset

    @foreach(config("laravel-pages.pages.$page.sections.others") as $section)
        @if(
            ! array_key_exists('auth', $section)
            || ($section['auth']['gate'] === \Atin\LaravelPages\Enums\Gate::LoggedIn && auth()->check())
            || ($section['auth']['gate'] === \Atin\LaravelPages\Enums\Gate::LoggedOut && auth()->guest())
        )
            @if(
                isset($variant)
                && array_key_exists('variants', $section)
                && in_array($variant, $section['variants'])
            )
                @include("pages.$page.$variantPrefix{$section['name']}")
            @else
                @include("pages.$page.{$section['name']}")
            @endif
       @endif
    @endforeach

    @include(config('laravel-pages.footer_path'))
</x-guest-layout>
