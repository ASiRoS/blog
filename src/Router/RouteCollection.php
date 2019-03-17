<?php

namespace App\Router;

use App\Helpers\Iterator;
use App\Helpers\IteratorInterface;

class RouteCollection implements \Iterator, IteratorInterface
{
    use Iterator;

    private $routes = [];

    public function addRoute(Route $route)
    {
        $this->routes[] = $route;
    }

    public function getIterator() : array
    {
        return $this->routes;
    }
}