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
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->toppings = [];
    }



}