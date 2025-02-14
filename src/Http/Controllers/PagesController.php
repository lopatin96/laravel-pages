<?php

namespace Atin\LaravelPages\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function show(string $page = 'index')
    {
        return view(view()->exists("pages.$page") ? "pages.$page" : "laravel-pages::pages.$page", [
            'page' => $page,
        ]);
    }
}
