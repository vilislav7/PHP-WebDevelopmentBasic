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
     */
    public function __construct(string $type, int $weight)
    {
        $this->type = $type;
        $this->weight = $weight;
    }


}