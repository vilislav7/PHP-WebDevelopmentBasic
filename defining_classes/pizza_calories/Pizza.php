<?php

class Pizza
{
    /** @var string $name */
    private $name;
    /** @var Dough $dough */
    private $dough;
    /** @var Topping[] $toppings */
    private $toppings;

    /**
     * Pizza constructor.
     * @param string $name
     * @throws Exception
     */
    public function __construct(string $name)
    {
        $this->setName($name);
        $this->toppings = [];
    }

    /**
     * @param string $name
     * @throws Exception
     */
    private function setName(string $name): void
    {
        if ($name ==='' || strlen($name) > 15) {
            throw new Exception('Pizza name should be between 1 and 15 symbols.');
        }
        $this->name = $name;
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