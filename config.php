<?php

declare(strict_types=1);

// return [
//     'driver' => 'mysql',
//     'host' => '127.0.0.1',
//     'database' => 'pokemon',
//     'username' => 'root',
//     'password' => '1991',
// ];

return [
    'driver' => $_ENV['DATABASE_DRIVER'],
    'host' => $_ENV['DATABASE_HOST'],
    'database' => $_ENV['DATABASE_NAME'],
    'username' => $_ENV['DATABASE_USER'],
    'password' => $_ENV['DATABASE_PASSWORD'],
];
