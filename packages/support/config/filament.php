<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Broadcasting
    |--------------------------------------------------------------------------
    |
    | By uncommenting the Laravel Echo configuration, you may connect Filament
    | to any Pusher-compatible websockets server.
    |
    | This will allow your users to receive real-time notifications.
    |
    */

    'broadcasting' => [

        // 'echo' => [
        //     'broadcaster' => 'pusher',
        //     'key' => env('VITE_PUSHER_APP_KEY'),
        //     'cluster' => env('VITE_PUSHER_APP_CLUSTER'),
        //     'wsHost' => env('VITE_PUSHER_HOST'),
        //     'wsPort' => env('VITE_PUSHER_PORT'),
        //     'wssPort' => env('VITE_PUSHER_PORT'),
        //     'authEndpoint' => '/broadcasting/auth',
        //     'disableStats' => true,
        //     'encrypted' => true,
        //     'forceTLS' => true,
        // ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | This is the storage disk Filament will use to store files. You may use
    | any of the disks defined in the `config/filesystems.php`.
    |
    */

    'default_filesystem_disk' => env('FILAMENT_FILESYSTEM_DISK', 'public'),

    /*
    |--------------------------------------------------------------------------
    | Assets Path
    |--------------------------------------------------------------------------
    |
    | This is the directory where Filament's assets will be published to. It
    | is relative to the `public` directory of your Laravel application.
    |
    | After changing the path, you should run `php artisan filament:assets`.
    |
    */

    'assets_path' => null,

    /*
    |--------------------------------------------------------------------------
    | Cache Path
    |--------------------------------------------------------------------------
    |
    | This is the directory that Filament will use to store cache files that
    | are used to optimize the registration of components.
    |
    | After changing the path, you should run `php artisan filament:cache-components`.
    |
    */

    'cache_path' => base_path('bootstrap/cache/filament'),

    /*
    |--------------------------------------------------------------------------
    | Livewire Loading Delay
    |--------------------------------------------------------------------------
    |
    | This sets the delay before loading indicators appear.
    |
    | Setting this to 'none' makes indicators appear immediately, which can be
    | desirable for high-latency connections. Setting it to 'default' applies
    | Livewire's standard 200ms delay.
    |
    */

    'livewire_loading_delay' => 'default',

    /*
        |--------------------------------------------------------------------------
        | Content Security Policy
        |--------------------------------------------------------------------------
        | if enabled this will add a "nonce='xxxxx'" attribute to the script and style tags
        | to allow the browser to execute only scripts that have the nonce attribute
        | this is a security measure to prevent XSS attacks.
        |
        | You will also need to enable CSP headers in your application via middleware
        | or use a package like spatie/laravel-csp https://github.com/spatie/laravel-csp
        | if using spatie/laravel-csp you should set the generator function to 'csp_nonce'
        |
        | If setting your own CSP headers you should set the generator function to your own function
        | or use filament_csp_nonce() when generating your CSP header nonce value
        |
        | see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy
     */
    'content_security_policy' => [
        'nonce' => [
            'enabled' => env('FILAMENT_NONCE_ENABLED', false),
            'generator_function' => env('FILAMENT_NONCE_GENERATOR', null), // defaults to filament_csp_nonce() => Str::random(32)
        ]
    ],


];
