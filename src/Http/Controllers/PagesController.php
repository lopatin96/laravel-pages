<?php

namespace Atin\LaravelPages\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function show(string $page = 'index')
    {
        return view('laravel-welcome-page::welcome-page.index', [
            'page' => $page,
        ]);
    }
}
