<?php

include_once 'Product.php';

class Person
{
    private $name;
    private $money;
    private $products;

    public function __construct(string $name, int $money)
    {
        $this->products = [];

        $this->setName($name);
        try {
            $this->setMoney($money);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    private function setName(string $name) {
        $this->name = $name;
    }

    private function setMoney(int $money) {
        if ($money >= 0) {
            $this->money = $money;
        } else {
            throw new Exception('Money cannot be null');
        }
    }


}