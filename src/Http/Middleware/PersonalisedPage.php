<?php

namespace Atin\LaravelPages\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PersonalisedPage
{
    public function handle(Request $request, Closure $next): mixed
    {
        $cookieLifeInMinutes = config('laravel-pages.cookie_life_in_minutes', 43200);

        if (request()->is('/')) {
            if (request()->has('country')) {
                cookie()->queue(cookie('country', request()->get('country'), $cookieLifeInMinutes));
            }

            if (request()->has('variant')) {
                cookie()->queue(cookie('variant', request()->get('variant'), $cookieLifeInMinutes));
            }

            if (request()->has('keyword')) {
                cookie()->queue(cookie('keyword', request()->get('keyword'), $cookieLifeInMinutes));
            }
        }

        return $next($request);
    }
}
