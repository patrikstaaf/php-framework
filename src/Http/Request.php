<?php

declare(strict_types=1);

namespace App\Http;

class Request
{
    public static function uri(): string
    {
        return preg_replace('/\?.*/', '', trim($_SERVER['REQUEST_URI'], '/'));
    }
}
