<?php
/**
 * Created by PhpStorm.
 * User: Vilislav
 * Date: 10.12.2018 г.
 * Time: 18:12
 */

class Engine
{
    private $speed;
    private $power;

    /**
     * Engine constructor.
     * @param $speed
     * @param $power
     */
    public function __construct(int $speed,int $power)
    {
        $this->speed = $speed;
        $this->power = $power;
    }

    /**
     * @return int
     */
    public function getPower(): int
    {
        return $this->power;
    }

}