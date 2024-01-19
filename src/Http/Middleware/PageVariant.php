<?php

namespace Atin\LaravelPages\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PageVariant
{
    public function handle(Request $request, Closure $next): mixed
    {
        if (request()->is('/') && request()->has('variant')) {
            cookie()->queue(cookie('variant', request()->get('variant'), config('laravel-pages.variant_cookie_life_in_minutes', 43200)));
        }

        return $next($request);
    }
}