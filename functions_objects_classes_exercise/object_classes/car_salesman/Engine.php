<?php

class Engine
{
    private $model;
    private $power;
    private $displacement = 'n/a';
    private $efficiency = 'n/a';

    /**
     * Engine constructor.
     * @param $model
     * @param $power
     */
    public function __construct($model, $power)
    {
        $this->setModel($model);
        $this->setPower($power);
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model): void
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @param mixed $power
     */
    public function setPower($power): void
    {
        $this->power = $power;
    }

    /**
     * @return mixed
     */
    public function getDisplacement()
    {
        return $this->displacement;
    }

    /**
     * @param mixed $displacement
     */
    public function setDisplacement($displacement): void
    {
        $this->displacement = $displacement;
    }

    /**
     * @return mixed
     */
    public function getEfficiency()
    {
        return $this->efficiency;
    }

    /**
     * @param mixed $efficiency
     */
    public function setEfficiency($efficiency): void
    {
        $this->efficiency = $efficiency;
    }

    public function __toString()
    {
        return "    Power: $this->power".PHP_EOL."    Displacement: $this->displacement".PHP_EOL."    Efficiency: $this->efficiency".PHP_EOL;
    }


}