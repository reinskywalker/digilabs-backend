<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie', '/login'],  // Sesuaikan dengan route yang perlu CORS
    'allowed_methods' => ['*'],  // Mengijinkan semua metode HTTP
    'allowed_origins' => ['http://103.47.132.55'],  // Pastikan IP ini sesuai dengan frontend IP
    'allowed_headers' => ['*'],  // Mengijinkan semua header
    'supports_credentials' => true,  // Allow credentials (cookies, CSRF token)
    'max_age' => 0,
    'exposed_headers' => [],
];
