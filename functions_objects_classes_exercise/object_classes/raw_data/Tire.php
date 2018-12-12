<?php
/**
 * Created by PhpStorm.
 * User: Vilislav
 * Date: 10.12.2018 г.
 * Time: 18:14
 */

class Tire
{
    private $age;
    private $pressure;

    /**
     * Tire constructor.
     * @param $age
     * @param $pressure
     */
    public function __construct(int $age, float $pressure)
    {
        $this->age = $age;
        $this->pressure = $pressure;
    }

    /**
     * @return float
     */
    public function getPressure(): float
    {
        return $this->pressure;
    }
}