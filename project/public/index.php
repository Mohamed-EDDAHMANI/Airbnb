<?php 
require_once "../App/config/routes.php";
require "../vendor/autoload.php";
use App\Core\Router;

$router = new Router();
$router->dispatch($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);