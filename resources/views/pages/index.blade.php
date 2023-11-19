<x-guest-layout>
    <div
        x-data="{ lgHScreen: window.innerWidth / window.innerHeight < 2.2 }"
        @resize.window="lgHScreen = window.innerWidth / window.innerHeight < 2.2"
        class="flex flex-col bg-gradient-to-r {{ config('laravel-welcome-page.gradient_from') }} {{ config('laravel-welcome-page.gradient_to') }} animate-gradient-x lg:h-screen"
        :class="{'lg:h-screen': lgHScreen}"
    >
        @include(config('laravel-welcome-page.header_path'), ['showLinks' => true])
        @include('laravel-welcome-page::welcome-page.main.' . config('laravel-welcome-page.sections.main.variant') . '.index')
    </div>

    @foreach(config('laravel-welcome-page.sections.others') as $section)
        @isset($section['view'])
            @include($section['view'], ['id' => $section['id'] ?? null])
        @else
            @include("laravel-welcome-page::welcome-page.{$section['name']}.{$section['variant']}.index", ['id' => $section['id'] ?? null])
        @endisset
    @endforeach

    @include(config('laravel-welcome-page.footer_path'))
</x-guest-layout>
