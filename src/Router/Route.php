<?php

namespace App\Router;

class Route
{
    const ALLOWED_METHODS = ['POST', 'GET'];

    private
       $methods = [],
       $url,
       $action
    ;

    public function __construct(array $methods, string $route, $action)
    {
        $this->setMethods($methods);
        $this->setAction($action);
        $this->url = $route;
    }

    public function setAction($action)
    {
        if(is_callable($action)) {
            $this->action = $action;
        } elseif(is_string($action)) {
            $parameters = explode('@', $action);

            if (count($parameters) === 2) {
                $controller = 'App\Controllers\\' . $parameters[0];

                $controller = new $controller;
                $action = $parameters[1];

                $this->action = [$controller, $action];
            } else {
                throw new \ErrorException('Route is invalid.');
            }
        }
    }

    public function getMethods(): array
    {
        return $this->methods;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function runAction()
    {
        call_user_func($this->action);
    }

    private function setMethods(array $methods)
    {
        foreach ($methods as $method) {
            $this->setMethod($method);
        }
    }

    private function setMethod($method)
    {
        if(!in_array($method, self::ALLOWED_METHODS)) {
            throw new \ErrorException('Ti pudor 4e za methodi daew?');
        }

        $this->methods[] = $method;
    }
}