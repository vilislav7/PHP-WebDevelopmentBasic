<?php

class Product
{
    private $name;
    private $price;

    public function __construct(string $name, int $price)
    {
        $this->name = trim($name);
        $this->price = $price;
    }


    public function getName() : string
    {
        return $this->name;
    }

    public function getPrice() : int
    {
        return $this->price;
    }

    public function productExist (string $name) : bool {
        return $this->name === $name;
    }
}