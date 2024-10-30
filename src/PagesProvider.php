<?php

namespace Atin\LaravelPages;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Events\Registered;


class PagesProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        \Event::listen(Registered::class, static function ($event) {
            $event->user->forceFill([
                'country' => request()->cookie('country'),
            ])->save();
        });

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-pages');

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-pages');

        $this->loadTranslationsFrom(__DIR__.'/../lang', 'laravel-pages');

        $this->publishes([
            __DIR__.'/../database/migrations' => database_path('/migrations')
        ], 'laravel-pages-migrations');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-pages')
        ], 'laravel-pages-views');

        $this->publishes([
            __DIR__.'/../lang' => $this->app->langPath('vendor/laravel-pages'),
        ], 'laravel-pages-lang');

        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('laravel-pages.php')
        ], 'laravel-pages-config');
    }
}