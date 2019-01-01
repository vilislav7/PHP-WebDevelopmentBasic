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

    public function getName() : string {
        return $this->name;
    }

    private function setName(string $name) : void {
        if ($name === '' || empty($name)) {
            throw new Exception('Name cannot be empty');
        } else {
            $this->name = $name;
        }
    }

    private function setMoney(int $money) {
        if ($money >= 0) {
            $this->money = $money;
        } else {
            throw new Exception('Money cannot be null');
        }
    }

    public function addProduct (Product $product) :void {
        $productPrice = $product->getPrice();

        if ($this->money >= $productPrice) {
            $this->money -= $productPrice;
            $this->products[] = $product;
            echo "{$this->name} bought {$product->getName()}". PHP_EOL;
        } else {
            echo "{$this->name} can't afford {$product->getName()}". PHP_EOL;
        }
    }

    public function getProducts() : array {
        if (count($this->products) === 0) {
            echo 'Nothing bought';
        }
        return $this->products;
    }

    public function personExist (string $name) : bool {
        return $this->name === $name;
    }

    public function __toString()
    {
        $person = $this->name. ' - ';
        $personsProducts = $this->products;
        $productsCount = count($personsProducts);

        if ($productsCount === 0) {
            $person .= 'Nothing bought';
        }

        for ($i = 0; $i<$productsCount; $i++) {
            $currentProduct = $personsProducts[$i];
            $glue = $i + 1 < $productsCount ? ',' : '';
            $person .= $currentProduct->getName() . $glue;
        }
        $person .= PHP_EOL;
        return $person;
    }
}