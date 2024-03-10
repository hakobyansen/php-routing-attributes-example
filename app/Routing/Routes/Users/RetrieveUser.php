<?php

namespace App\Routing\Routes\Users;

use App\Helpers\Request;
use App\Routing\Route;
use App\Routing\RouterBase;
use App\Services\JSONPlaceholder\UserService;

readonly class RetrieveUser extends RouterBase
{
    #[Route(method: 'get', endpoint: '/users')]
    public function index(): array
    {
        $userService = new UserService();

        $userId = Request::get('id');

        if(!$userId) {
            return $this->response(
                message: 'User not found',
                httpStatusCode: 404
            );
        }

        $user = $userService->retrieveUser($userId);

        return $this->response(
            message: 'Specific user',
            data: $user
        );
    }
}