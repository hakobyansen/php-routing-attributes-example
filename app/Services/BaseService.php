<?php

namespace App\Services;

use GuzzleHttp\Client;

abstract class BaseService
{
    protected Client $client;

    public function __construct(array $headers = [])
    {
        $this->client = new Client($headers);
    }

    protected function response(object $response): array
    {
        return json_decode(
            json: $response->getBody()->getContents(),
            associative: true
        );
    }
}