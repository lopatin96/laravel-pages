<?php

namespace Atin\LaravelPages\Http\Middleware;

use Atin\LaravelPages\Enums\Gate;
use Closure;
use Illuminate\Http\Request;

class PagesGateChecker
{
    public function handle(Request $request, Closure $next): mixed
    {
        $page = \Illuminate\Support\Facades\Request::path();

        if (array_key_exists($page, config('laravel-pages.pages'))) {
            switch (config("laravel-pages.pages.$page.auth.gate")) {
                case Gate::LoggedIn:
                    if (! auth()->check()) {
                        if (config("laravel-pages.pages.$page.auth.alternative")) {
                            return redirect(config("laravel-pages.pages.$page.auth.alternative"));
                        }
                        abort(404);
                    }
                    break;
                case Gate::LoggedOut:
                    if (auth()->check()) {
                        if (config("laravel-pages.pages.$page.auth.alternative")) {
                            return redirect(config("laravel-pages.pages.$page.auth.alternative"));
                        }
                        abort(404);
                    }
                break;
            }
        }

        return $next($request);
    }
}
