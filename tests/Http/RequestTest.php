<?php

declare(strict_types=1);


namespace Tests\Http\RequestTest;

use App\Http\Request;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
    public function test_get_uri()
    {
        $_SERVER['REQUEST_URI'] = "/xyz";
        $uri = Request::uri();

        $this->assertSame("xyz", $uri);
    }
}
