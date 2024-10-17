<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['*'],
    'allowed_methods' => ['*'],
    'allowed_origins' => [
        'http://103.47.132.55',
        'http://3.1.220.199',
        'https://vercel.live/link/digilabs-frontend-kyrie-lucids-projects.vercel.app?via=project-dashboard-alias-list&p=1',
        'https://*.vercel.app',
        env('FRONTEND_URL', 'http://localhost:3000'),
    ],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true,
];
