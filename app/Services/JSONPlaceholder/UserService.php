<?php

namespace App\Services\JSONPlaceholder;

class UserService extends JSONPlaceholderBase
{
    public function createUser(array $data = []): array
    {
        $response = $this->client->post(
            uri: $this->baseURL.'/users',
            options: [
                'body' => json_encode($data)
            ]
        );

        return $this->response($response);
    }

    public function retrieveUser(int $userId): array
    {
        $response = $this->client->get(
            uri: "{$this->baseURL}/users/{$userId}"
        );

        return $this->response($response);
    }
}