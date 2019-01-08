<?php

class Kitten extends Cat
{
    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age, 'female');
    }

    public function makeSound(): string
    {
        return 'Miau';
    }

    public function __toString(): string
    {
        return "Kitten {$this->getName()} {$this->getAge()} {$this->getGender()}";
    }
}