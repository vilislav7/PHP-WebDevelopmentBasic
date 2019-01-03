<?php

require_once 'Dough.php';
require_once 'Topping.php';
class Pizza
{
    /** @var string $name */
    private $name;
    /** @var int $toppingSize */
    private $toppingSize;
    /** @var Dough $dough */
    private $dough;
    /** @var Topping[] $toppings */
    private $toppings;

    /**
     * Pizza constructor.
     * @param string $name
     * @param int $toppingSize
     * @throws Exception
     */
    public function __construct(string $name, int $toppingSize)
    {
        $this->setName($name);
        $this->setToppingSize($toppingSize);
        $this->toppings = [];
    }

    /**
     * @param string $name
     * @throws Exception
     */
    private function setName(string $name): void
    {
        $name = trim($name);
        if ($name ==='' || strlen($name) > 15) {
            throw new Exception('Pizza name should be between 1 and 15 symbols.');
        }
        $this->name = $name;
    }
    /**
     * @param int $toppingSize
     * @throws Exception
     */
    private function setToppingSize (int $toppingSize) : void {
        if ($toppingSize > 10 || $this->toppingSize < 0) {
            throw new Exception('Number of toppings should be in range [0..10].');
        }
        $this->toppingSize = $toppingSize;
    }

    /** @param Dough $dough */
    public function addDough (Dough $dough) : void {
        $this->dough = $dough;
    }

    /** @param Topping $topping */
    public function addTopping(Topping $topping) : void {
        $this->toppings[] = $topping;
    }

}