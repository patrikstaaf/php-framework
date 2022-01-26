<?php

use App\Exception\NotFoundException;
use App\Http\Request;
use App\Http\Router;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/bootstrap.php';

$router = new Router([
    '' => __DIR__ . '/controllers/pokedex.php',
    'pokemon' => __DIR__ . '/controllers/pokemon.php',
]);

try {
    require $router->direct(Request::uri());
} catch (NotFoundException) {
    require view('404');
}
