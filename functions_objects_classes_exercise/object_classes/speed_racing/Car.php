<?php

class Car
{
    private $model;
    private $fuel_amount;
    private $fuel_consume;
    private $distance = 0;

    /**
     * Car constructor.
     * @param $model
     * @param $fuel_amount
     * @param $fuel_consume
     */
    public function __construct($model, float $fuel_amount, float $fuel_consume)
    {
        $this->model = $model;
        $this->fuel_amount = $fuel_amount;
        $this->fuel_consume = $fuel_consume;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    public function drive(float $distance) : bool {
        $fuel = $distance*$this->fuel_consume;
        if ($this->fuel_amount >= $distance*$this->fuel_consume) {
            $this->distance += $distance;
            $this->fuel_amount -= $fuel;
            return true;
        } else {
            return false;
        }
    }

    private function posibleDistance () {
        return $this->fuel_amount/$this->fuel_consume;
    }

    public function __toString()
    {
        $fuel_amount = number_format($this->fuel_amount, 2, '.', '');
        return "$this->model $fuel_amount $this->distance" . PHP_EOL;
    }
}