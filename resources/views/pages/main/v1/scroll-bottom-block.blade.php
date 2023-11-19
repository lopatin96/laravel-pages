<div class="flex justify-center relative">
    <script>
        setTimeout(function() {
            document.getElementById("scroll-bottom-button").classList.add("lg:block");
        }, {{ config('laravel-welcome-page.main-v1_scroll_bottom_button_hidden_during_ms') }});
    </script>
    <a
        href="{{ config('laravel-welcome-page.main-v1_scroll_bottom_button_path') }}"
        onclick="document.getElementById('scroll-bottom-button').classList.remove('lg:block')"
    >
        <lottie-player
            id="scroll-bottom-button"
            src="{{ asset(config('laravel-welcome-page.main-v1_scroll_bottom_button_src')) }}"
            speed="{{ config('laravel-welcome-page.main-v1_scroll_bottom_button_speed') }}"
            loop
            autoplay
            class="hidden rotate-180"
            style="
                width: {{ config('laravel-welcome-page.main-v1_scroll_bottom_button_width') }}px;
                height: {{ config('laravel-welcome-page.main-v1_scroll_bottom_button_height') }}px;
                position: absolute;
                right: {{ config('laravel-welcome-page.main-v1_scroll_bottom_button_right') }};
                bottom: {{ config('laravel-welcome-page.main-v1_scroll_bottom_button_bottom') }}px;
            "
        ></lottie-player>
    </a>
</div>
