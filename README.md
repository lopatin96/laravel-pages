# Install
### Migrations
Run migrations:
```php
php artisan migrate
```
### Middleware
Add PageGateChecker middleware to middleware array in *app/Http/Kernel.php*:
```php
  protected $middleware = [
        …
        \Atin\LaravelPages\Http\Middleware\PagesGateChecker::class,
        \Atin\LaravelPages\Http\Middleware\PersonalisedPage::class,
    ];
```

### Folders
For each page create a folder. For example, for ```index.php``` page create ```app/resources/views/pages/index``` folder.

### Config
#### Variables
Specify main variables (main colors, etc.)
```php
'header_path' => 'sections.header',
    'footer_path' => 'sections.footer',

    // Colors; Add all values to tailwind.config.js as `safelist` under `module.exports`
    'gradient_from' => 'from-zinc-100',
    'gradient_to' => 'to-emerald-300',

    'text_color_primary' => 'text-emerald-400',
    'text_color_secondary' => 'text-emerald-200',

    'bg_color_primary' => 'bg-emerald-400',
    'bg_color_secondary' => 'bg-emerald-200',

    'color_primary_hex' => '#34d399',
    'color_secondary_hex' => '#a7f3d0',

    'main_button_color' => 'bg-gray-950',
…
```

#### Pages
Specify which sections your page contain.
```php
…
'pages' => [
    'index' => [
        'sections' => [
            'main' => [
                'name' => 'main',
            ],
            'others' => [
                [
                    'name' => 'how-it-works',
                ],
                [
                    'name' => 'stats',
                ],
            ]
        ]
    ]
…
```

# Publishing
### Migrations
```php
php artisan vendor:publish --tag="laravel-pages-migrations"
```

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
