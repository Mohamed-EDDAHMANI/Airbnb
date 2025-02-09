<!-- <?php 
// require "../App/Views/index.php";

// require __DIR__."../../vendor/autoload.php";

// use App\Core\Router;

// $router = new Router();

// require_once __DIR__."../App/config/routes.php";


// $router->dispatch($_SERVER['REQUEST_METHOD'],$_SERVER['REQUEST_URI']);


?> -->



<?php
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../App/config/routes.php';

$request = $_SERVER['REQUEST_URI'];
$request = parse_url($request, PHP_URL_PATH);
if (isset($routes[$request])) {
    $controllerAction = explode('@', $routes[$request]);
    $controllerName = "App\\Controllers\\" . $controllerAction[0];
    $actionName = $controllerAction[1];

    if (class_exists($controllerName)) {
        $controller = new $controllerName();
        if (method_exists($controller, $actionName)) {
            $controller->$actionName();
        } else {
            echo "❌ Error: Method `$actionName` not found in `$controllerName`!";
        }
    } else {
        echo "❌ Error: Controller `$controllerName` not found!";
    }
} else {
    echo "🚨 404 - Page not found!";
}