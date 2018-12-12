<?php

class CargoCar
{
    private $weight;
    private $type;

    public function __construct(int $weight, string $type)
    {
        $this->weight = $weight;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}