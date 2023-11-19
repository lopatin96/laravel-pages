# Install
Add PageGateChecker middleware to middleware array in *app/Http/Kernel.php*:
```php
  protected $middleware = [
        …
        \Atin\LaravelPages\Http\Middleware\PagesGateChecker::class,
    ];
```
### Publish config
```php
php artisan vendor:publish --tag="laravel-pages-config"
```
Select which variants of sections in you want. You can do it in *config/welcome-page.php*:
```json
'sections' => [
    'main' => 'v1',
    'others' => [
        [
            'name' => 'how-it-works',
            'variant' => 'v1',
        ],
        [
          'name' => 'call-to-action',
          'variant' => 'v2',
        ],
```
by specifying variants of sections and their orders.
Also, choose primary and secondary colors and add their to safelist key in *tailwind.config.js*:
```js
safelist: [
    'from-zinc-100',
    'to-sky-300',
    'text-sky-600',
    'text-sky-300',
    'bg-sky-600',
    'bg-sky-300',
    'bg-red-500',
    'text-link',
],
```

### Publish localization
```php
php artisan vendor:publish --tag="laravel-pages-lang"
```
Add local strings in *lang/vendor/welcome-page/en/<section-name-variant>.php* for selected sections.

# Publishing
### Localization
```php
php artisan vendor:publish --tag="laravel-pages-lang"
```

### Views
```php
php artisan vendor:publish --tag="laravel-pages-views"
```

### Config
```php
php artisan vendor:publish --tag="laravel-pages-config"
```