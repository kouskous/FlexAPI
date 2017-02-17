<?php
/**
 * Created by PhpStorm.
 * User: zekri
 * Date: 17/02/17
 * Time: 12:47
 */

namespace flexapi\kernel;
use flexapi\http\Response;

class Resolver
{
    public static function generateResponse($response)
    {
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}