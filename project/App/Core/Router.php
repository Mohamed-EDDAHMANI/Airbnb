<?php

namespace App\Core;

class Router
{
    private $routes = [];

    public function get($route, $controller): void
    {
        $this->routes['GET'][$route] = $controller;
    }

    public function post($route, $controller): void
    {
        $this->routes['POST'][$route] = $controller;
    }

  

    public function dispatch($url, $method)
    {

        $path = parse_url($url, PHP_URL_PATH);
        $path = rtrim($path, '/');

            if ($path === '') {
                $path = '/';
            }

        if (isset($this->routes[$method][$path])) {

            $pathController = "App\\Controllers\\";

            $controllerMethod = $this->routes[$method][$path];

            $controllerMethod = explode( '@', $controllerMethod);

            $countrollerName = $controllerMethod[0];

            $methodName = $controllerMethod[1];

            $controllerPath = $pathController . $countrollerName;
            
            if (class_exists($controllerPath) && method_exists($controllerPath ,$methodName)) {
                
                $controller = new $controllerPath();

                $controller->$methodName();
                return;
            }
        }
        echo "404 - Page not found";
    }
}