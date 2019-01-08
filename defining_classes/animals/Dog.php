<?php


class Dog extends Animal
{
    public function makeSound(): string
    {
        return 'BauBau';
    }

    public function __toString(): string
    {
        return 'Dog ' . parent::__toString();
    }
}