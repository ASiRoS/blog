<?php

namespace App;

class Router
{
    private $routeCollection;

    public function __construct()
    {
        $this->routeCollection = new RouteCollection();
    }

    public function get($route, callable $func)
    {
        $route = new Route(['GET'], $route, $func);

        $this->routeCollection->addRoute($route);
    }

    public function match()
    {
        foreach ($this->routeCollection as $route) {
            if ($route->getUrl() === $_SERVER['REQUEST_URI'] && in_array($_SERVER['REQUEST_METHOD'], $route->getMethods())) {
                call_user_func($route->getAction());
            }
        }
    }

}