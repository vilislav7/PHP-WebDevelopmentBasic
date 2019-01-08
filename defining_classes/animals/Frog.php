<?php

class Frog extends Animal
{
    public function makeSound(): string
    {
        return 'Frogggg';
    }

    public function __toString(): string
    {
        return 'Dog ' . parent::__toString();
    }
}