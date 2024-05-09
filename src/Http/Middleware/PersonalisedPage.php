<?php

namespace Atin\LaravelPages\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Str;

class PersonalisedPage
{
    public function handle(Request $request, Closure $next): mixed
    {
        $cookieLifeInMinutes = config('laravel-pages.cookie_life_in_minutes', 43200);

        if (array_key_exists($request->path(), config('laravel-navigation.header'))) {
            if ($request->has('country')) {
                cookie()->queue(cookie('country', Str::lower(Str::limit($request->get('country'), 2, '')), $cookieLifeInMinutes));
            } elseif (
                ! $request->cookie('country')
                && ($country = is_object(Location::get($request->ip())) ? Str::lower(Str::limit(Location::get($request->ip())->countryCode, 2, '')) : null)
            ) {
                cookie()->queue(cookie('country', $country, $cookieLifeInMinutes));
                Session::put('country', $country);
            }

            if ($request->has('variant')) {
                cookie()->queue(cookie('variant', Str::lower(Str::limit($request->get('variant'), 32, '')), $cookieLifeInMinutes));
            }

            if ($request->has('keyword')) {
                cookie()->queue(cookie('keyword', Str::lower(Str::limit($request->get('keyword'), 64, '')), $cookieLifeInMinutes));
            }
        }

        return $next($request);
    }
}
