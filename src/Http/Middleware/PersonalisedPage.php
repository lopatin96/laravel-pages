<?php

namespace Atin\LaravelPages\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PersonalisedPage
{
    public function handle(Request $request, Closure $next): mixed
    {
        if (request()->is('/')) {
            if (request()->has('lang')) {
                cookie()->queue(cookie('page_lang', request()->get('lang'), config('laravel-pages.cookie_life_in_minutes', 43200)));
            }

            if (request()->has('variant')) {
                cookie()->queue(cookie('page_variant', request()->get('variant'), config('laravel-pages.cookie_life_in_minutes', 43200)));
            }

            if (request()->has('keyword')) {
                cookie()->queue(cookie('page_keyword', request()->get('keyword'), config('laravel-pages.cookie_life_in_minutes', 43200)));
            }
        }

        return $next($request);
    }
}