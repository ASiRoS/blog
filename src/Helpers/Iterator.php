<?php

namespace App\Helpers;

trait Iterator
{
    private $iterator;

    private function setIterator()
    {
        if(!$this instanceof IteratorInterface) {
            throw new \ErrorException('This trait can be used only for classes that implements IteratorInterface.');
        }

        if(!$this->iterator) {
            $this->iterator = $this->getIterator();
        }
    }

    public function rewind() {
        $this->setIterator();

        reset($this->iterator);
    }

    public function current() {
        return current($this->iterator);
    }

    public function key() {
        return key($this->iterator);
    }

    public function next() {
        next($this->iterator);
    }

    public function valid() {
        return key($this->iterator) !== null;
    }
}