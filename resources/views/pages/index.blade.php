<x-guest-layout>
    @if(config("laravel-pages.pages.$page.sections.main"))
        <div
                x-data="{ lgHScreen: window.innerWidth / window.innerHeight < 2.2 }"
                @resize.window="lgHScreen = window.innerWidth / window.innerHeight < 2.2"
                class="flex flex-col bg-gradient-to-r {{ config('laravel-pages.gradient_from') }} {{ config('laravel-pages.gradient_to') }} animate-gradient-x lg:h-screen"
                :class="{'lg:h-screen': lgHScreen}"
        >
            @include(config('laravel-pages.header_path'), ['showLinks' => true])
            @include("pages.$page." . config("laravel-pages.pages.$page.sections.main.name"))
        </div>
    @else
        @include(config('laravel-pages.header_path'), ['showLinks' => true])
    @endisset

    @foreach(config("laravel-pages.pages.$page.sections.others") as $section)
        @include("pages.$page.{$section['name']}")
    @endforeach

    @include(config('laravel-pages.footer_path'))
</x-guest-layout>
