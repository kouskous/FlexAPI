<?php
/**
 * Created by PhpStorm.
 * User: zekri
 * Date: 09/02/17
 * Time: 20:30
 */
include 'Autoloader.php';
use flexapi\http\Response;
use flexapi\kernel\Dispatcher;

//Classes and interfaces autoload
spl_autoload_register('Autoloader::loader');
echo file_get_contents('php://input');
Dispatcher::route();


//build request object

//Build response object
$response = new Response();

//$response = $kernel->handle($request);
//$response->send();

//send response()
