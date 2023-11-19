<?php

use Illuminate\Support\Facades\Route;
use Atin\LaravelPages\Http\Controllers\PagesController;

Route::get('/{page?}', [PagesController::class, 'show'])
    ->whereIn('page', array_keys(config('laravel-pages.pages')))
    ->name('home');