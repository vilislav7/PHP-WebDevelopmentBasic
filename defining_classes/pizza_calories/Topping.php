<?php

class Topping
{
    /** @var string $type */
    private $type;
    /** @var int $weight */
    private $weight;

    /**
     * Topping constructor.
     * @param string $type
     * @param int $weight
     * @throws Exception
     */
    public function __construct(string $type, int $weight)
    {
        $this->setType($type);
        $this->setWeight($weight);
    }

    /**
     * @param string $type
     * @throws Exception
     */
    public function setType(string $type): void
    {
        if ($type === 'Meat' || $type === 'Veggies' || $type === 'Cheese' || $type === 'Sauce' ) {
            $this->type = $type;
        } else {
            throw new Exception("Cannot place {$type} on top of your pizza.");
        }
    }

    /**
     * @param int $weight
     * @throws Exception
     */
    public function setWeight(int $weight): void
    {
        if ($weight < 1 || $weight > 50) {
            throw new Exception("{$this->type} weight should be in the range [1..50]");
        }
        $this->weight = $weight;
    }


}