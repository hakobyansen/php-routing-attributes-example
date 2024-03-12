<?php

namespace App\Routing\Routes;

use App\Routing\Route;
use App\Routing\RouterBase;

readonly class Home extends RouterBase
{
    #[Route(method: 'get', endpoint: '/')]
    public function index(): array
    {
        return $this->response(
            message: 'Welcome Home'
        );
    }
}