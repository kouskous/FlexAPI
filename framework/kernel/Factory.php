<?php
/**
 * Created by PhpStorm.
 * User: zekri
 * Date: 14/02/17
 * Time: 11:14
 */

namespace flexapi\kernel;


class Factory
{
    public static function makeController($controllerName){
        $controllerName .= "Controller";
        $controller = new $controllerName;
        return $controller;
    }
}