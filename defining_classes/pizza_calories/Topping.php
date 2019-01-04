<?php

class Topping
{
    /** @var string $type */
    private $type;
    /** @var int $weight */
    private $weight;
    /** @var float $calories */
    private $calories;

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

        $this->setCalories();
    }

    /**
     * @param string $type
     * @throws Exception
     */
    private function setType(string $type): void
    {
        $givenType = $type;
        $type = strtolower($type);
        if ($type === 'meat' || $type === 'veggies' || $type === 'cheese' || $type === 'sauce' ) {
            $this->type = $type;
        } else {
            throw new Exception("Cannot place {$givenType} on top of your pizza.");
        }
    }

    /**
     * @param int $weight
     * @throws Exception
     */
    private function setWeight(int $weight): void
    {
        if ($weight < 1 || $weight > 50) {
            $str = strtoupper($this->type);
            throw new Exception("{$this->type} weight should be in the range [1..50].");
        }
        $this->weight = $weight;
    }

    private function setCalories () :void {
        $modifier = 0;
        $type = strtolower($this->type);

        if ($type === 'meat') {
            $modifier = 1.2;
        } elseif ($type === 'veggies') {
            $modifier = 0.8;
        } elseif ($type === 'cheese') {
            $modifier = 1.1;
        } elseif ($type === 'sauce') {
            $modifier = 0.9;
        }

        $this->calories = $this->weight * 2 * $modifier;
    }

    /**
     * @return float
     */
    public function getCalories(): float
    {
        return $this->calories;
    }
}