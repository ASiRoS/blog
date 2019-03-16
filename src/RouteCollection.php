<?php

namespace App;

class RouteCollection implements \Iterator
{
    use Iterator;

    private $routes = [];

    public function addRoute(Route $route)
    {
        $this->routes[] = $route;

        $this->setIterator($this->routes);
    }
}