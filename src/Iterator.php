<?php

namespace App;

trait Iterator
{
    protected $data;

    protected function setIterator($data)
    {
        $this->data = $data;
    }

    public function rewind() {
        reset($this->data);
    }

    public function current() {
        return current($this->data);
    }

    public function key() {
        return key($this->data);
    }

    public function next() {
        next($this->data);
    }

    public function valid() {
        return key($this->data) !== null;
    }
}