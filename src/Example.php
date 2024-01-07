<?php

namespace Project;

class Example
{

    public function __construct(
        public string $name,
    )
    {

    }

    public function hello() : string
    {
        return "Hello, {$this->name}";
    }

}