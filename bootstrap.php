<?php

use App\Routing\RouterHandler;
use Dotenv\Dotenv;

$dotEnv = Dotenv::createImmutable(__DIR__);
$dotEnv->safeLoad();

RouterHandler::handle();