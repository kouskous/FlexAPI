<?php
/**
 * Created by PhpStorm.
 * User: zekri
 * Date: 13/02/17
 * Time: 12:38
 */

namespace flexapi\kernel;


class Dispatcher
{
    protected static $routerPath = 'config/router.json';

    public static function route()
    {
        //Getting request endpoint
        $directoryAbsolutePath = explode('/', __DIR__);
        $directoryName = $directoryAbsolutePath[count($directoryAbsolutePath)-3];
        $path = explode("$directoryName", $_SERVER['REQUEST_URI']);
        $endpoint = (count($path) == 1) ? $path[0] : $path[1];
        //Loading router
        $router_config_file = file_get_contents(Dispatcher::$routerPath);
        $router = json_decode($router_config_file);

        //Mapping endpoint => (controller, action)
        $controllerName = null;
        $controllerAction = null;
        foreach ($router as $route) {
            if (($route->route == $endpoint) && (strtolower($route->method) == strtolower($_SERVER['REQUEST_METHOD']))) {
                $controllerName = $route->controller;
                $controllerAction = $route->action;
                $method = strtolower($route->method);
            }
        }
        $controller = Factory::makeController($controllerName);
        $controllerAction .= "Action";
        $controller->$controllerAction();
    }
}