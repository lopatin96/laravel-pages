<?php

namespace Atin\LaravelPages\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Str;

class PersonalisedPage
{
    public function handle(Request $request, Closure $next): mixed
    {
        $cookieLifeInMinutes = config('laravel-pages.cookie_life_in_minutes', 43200);

        if (request()->is('/')) {
             if ($country = request()->has('country') ?: (is_object(Location::get($request->ip())) ? Str::lower(Location::get($request->ip())->countryCode) : null)) {
                cookie()->queue(cookie('country', $country, $cookieLifeInMinutes));
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
