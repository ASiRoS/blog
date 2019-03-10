<?php

class Animal
{
    protected $name;
}

class Human extends Animal
{
    public function __construct($name)
    {
        $this->rename($name);
    }

    public function getName()
    {
        return $this->name;
    }

    public function rename($name)
    {
        $this->name = $name;
    }
}

$sergey = new Human('Sergey');

echo $sergey->getName();