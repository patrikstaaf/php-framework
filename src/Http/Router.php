<?php

declare(strict_types=1);

namespace App\Http;

use Exception;
use App\Exception\NotFoundException;


class Router
{
    public function __construct(private array $routes)
    {
    }

    public function direct(string $uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new NotFoundException('No route defined for this URI.');
    }
}
