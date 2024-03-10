<?php

namespace Integration\Routing;

use App\Routing\Route;
use App\Routing\RouterHandler;
use PHPUnit\Framework\TestCase;

final class RouteTest extends TestCase
{
    public function setUp(): void
    {
        RouterHandler::register();
    }

    public function testValidateEndpoint(): void
    {
        $this->expectNotToPerformAssertions();

        new Route(
            method: 'get',
            endpoint: '/test'
        );
    }

    public function testValidateMethodException(): void
    {
        $this->expectException(\Exception::class);

        new Route(
            method: 'dummy',
            endpoint: '/test'
        );
    }
}