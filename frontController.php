<?php
/**
 * Created by PhpStorm.
 * User: zekri
 * Date: 09/02/17
 * Time: 20:30
 */
include 'Autoloader.php';
use flexapi\kernel\Dispatcher;
use flexapi\kernel\Resolver;

//Classes and interfaces autoload
spl_autoload_register('Autoloader::loader');

//Dispatching
$response = Dispatcher::route();

//View resolving
Resolver::generateResponse($response);

