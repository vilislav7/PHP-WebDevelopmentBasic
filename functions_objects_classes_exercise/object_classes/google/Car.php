<?php

class Car
{
    private $model;
    private $speed;

    /**
     * Car constructor.
     * @param $model
     * @param $speed
     */
    public function __construct(string $model, int $speed)
    {
        $this->model = $model;
        $this->speed = $speed;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function __toString()
    {
        return $this->model. ' '.$this->speed.PHP_EOL;
    }
}