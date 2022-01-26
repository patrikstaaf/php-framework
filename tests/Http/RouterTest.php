<?php

declare(strict_types=1);

namespace Tests\Http\RouterTest;

use App\Exception\NotFoundException;
use App\Http\Router;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase
{
    public function test_route_request()
    {
        $router = new Router(['' => 'hårdkodat']);

        $path = $router->direct('');

        $this->assertSame('hårdkodat', $path);
    }

    public function test_route_not_found()
    {
        $this->expectException(NotFoundException::class);

        $router = new Router(['' => 'hårdkodat']);

        $path = $router->direct('4004');
    }
}
