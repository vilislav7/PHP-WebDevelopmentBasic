<?php

class Food
{
    private $name;
    private $pointOfHappiness;

    public function __construct(string $name, int $pointOfHappiness)
    {
        $this->name = $name;
        $this->pointOfHappiness = $pointOfHappiness;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getPointOfHappiness(): int
    {
        return $this->pointOfHappiness;
    }


}