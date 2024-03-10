<?php

namespace App\Services\JSONPlaceholder;

use App\Services\BaseService;

abstract class JSONPlaceholderBase extends BaseService
{
    protected readonly string $baseURL;

    public function __construct()
    {
        parent::__construct();

        $this->baseURL = $_ENV['JSON_PLACEHOLDER_BASE_URL'];
    }
}