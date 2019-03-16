<?php

namespace App\Router;

use App\Helpers\Iterator;

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