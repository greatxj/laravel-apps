<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | The root URL of each application.
    |
    */

    'url' => [
        'web' => env('APP_URL'),
        'admin' => env('APP_URL_ADMIN', env('APP_URL')),
        'api' => env('APP_URL_API', env('APP_URL')),
        'assets' => env('APP_URL_ASSETS', env('APP_URL')),
    ],

    /*
    |--------------------------------------------------------------------------
    | Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically registered for
    | each application.
    |
    */

    'providers' => [

        'admin' => [
            //
        ],

        'api' => [
            //
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Application Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may override the default configurations for each application.
    |
    */

    'config' => [

        'default' => [
            'app.editor' => env('APP_EDITOR'),
        ],

        'admin' => [
            //
        ],

        'api' => [
            'auth.defaults.guard' => 'api',
        ],

    ],

];
