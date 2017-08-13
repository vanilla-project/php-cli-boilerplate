<?php
declare(strict_types=1);

namespace Example;

class Greeting
{
    private $name = [];

    public function __construct()
    {
    }

    public function setArguments(array $arguments)
    {
        if (isset($arguments[1])) {
            $this->name = $arguments[1];
        } else {
            $this->name = 'Stranger';
        }
    }

    public function sayHello(): string
    {
        return 'Hello ' . $this->name . PHP_EOL;
    }
}
