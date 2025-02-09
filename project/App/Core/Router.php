<?php

namespace project\Core;

class Router {
    private $routes = [];

    public function __construct($routes) {
        $this->routes = $routes;
    }

    public function dispatch($requestUri) {
        $requestUri = strtok
    }
    