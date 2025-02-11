<?php 
require "../vendor/autoload.php";
use App\Core\Router;

$router = new Router();
require_once "../App/config/routes.php";
$router->dispatch($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);