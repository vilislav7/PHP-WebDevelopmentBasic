<?php

class Product
{
    private $name;
    private $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }


    public function getName() : string
    {
        return $this->name;
    }

    public function getPrice() : float
    {
        return $this->price;
    }

    public function getProduct (string $name) {
        if ($this->name === $name) {
            return $this;
        } else {
            return null;
        }
    }
}