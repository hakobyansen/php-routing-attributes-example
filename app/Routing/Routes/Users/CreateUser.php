<?php

namespace App\Routing\Routes\Users;

use App\Helpers\Request;
use App\Routing\Route;
use App\Routing\RouterBase;
use App\Services\JSONPlaceholder\UserService;

readonly class CreateUser extends RouterBase
{
    #[Route(method: 'post', endpoint: '/users')]
    public function index(): array
    {
        $userService = new UserService();

        $name = Request::get('name');
        $username = Request::get('username');

        $user = $userService->createUser([
            'name' => $name,
            'username' => $username
        ]);

        return $this->response(
            message: 'Creating user',
            data: $user
        );
    }
}