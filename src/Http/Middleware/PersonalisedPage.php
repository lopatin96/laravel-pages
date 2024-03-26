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
             if ($country = request()->has('country') ? request()->get('country') : (is_object(Location::get($request->ip())) ? Location::get($request->ip())->countryCode : null)) {
                cookie()->queue(cookie('country', Str::lower(Str::limit($country, 2, '')), $cookieLifeInMinutes));
            }

            if (request()->has('variant')) {
                cookie()->queue(cookie('variant', Str::lower(Str::limit(request()->get('variant'), 32, '')), $cookieLifeInMinutes));
            }

            if (request()->has('keyword')) {
                cookie()->queue(cookie('keyword', Str::lower(Str::limit(request()->get('keyword'), 32, '')), $cookieLifeInMinutes));
            }
        }

        return $next($request);
    }
}
