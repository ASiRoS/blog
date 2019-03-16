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

    public function __construct(array $methods, string $route, callable $action)
    {
        $this->setMethods($methods);
        $this->url = $route;
        $this->action = $action;
    }

    public function getMethods(): array
    {
        return $this->methods;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getAction(): callable
    {
        return $this->action;
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