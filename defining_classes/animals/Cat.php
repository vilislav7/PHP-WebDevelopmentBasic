<?php

class Cat extends Animal
{
    public function makeSound(): string
    {
        return 'MiauMiau';
    }

    public function __toString(): string
    {
        return 'Cat ' . parent::__toString();
    }
}