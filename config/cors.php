<?php

return [
    'paths' => ['*'],
    'allowed_methods' => ['*'],
    'allowed_origins' => [
        'http://localhost:3000',  // Localhost for development
        'http://103.47.132.55',    // Your IP address
        'http://3.1.220.199',      // Your server's IP address
        'https://*.vercel.app',    // Vercel frontend, if applicable
    ],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true, // This should be true to allow cookies
];
