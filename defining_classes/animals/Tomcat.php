<?php

class Tomcat extends Cat
{
    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age, 'male');
    }

    public function makeSound(): string
    {
        return 'Give me one million b***h';
    }

    public function __toString(): string
    {
        return "Tomcat {$this->getName()} {$this->getAge()} {$this->getGender()}";
    }
}