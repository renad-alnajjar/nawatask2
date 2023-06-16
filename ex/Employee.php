<?php

class Employee
{
    use Greeting;
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
