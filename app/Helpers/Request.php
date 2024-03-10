<?php

namespace App\Helpers;

class Request
{
    public static function get(string $param): ?string
    {
        if(isset($_REQUEST[$param])) {
            return htmlspecialchars($_REQUEST[$param]);
        }

        if(strlen(file_get_contents("php://input")) > 0) {
            $params = json_decode(
                file_get_contents("php://input")
            );

            return isset($params->$param) ? htmlspecialchars($params->$param) : null;
        }

        return null;
    }
}