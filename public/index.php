<?php

require_once __DIR__ . '/../bootstrap/autoload.php';

use app\Core\Router;

session_start();

$router = new Router();
$router->get('/', "HomeController@index");

$router->dispatch();
if(isset($_SESSION['error']))unset($_SESSION['error']);