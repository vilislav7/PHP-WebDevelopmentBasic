<?php

include_once 'CarAnother.php';

class CarAnother
{
    private $model;
    private $engine;
    private $cargo;
    private $tiers;

    /**
     * Car constructor.
     * @param $model
     * @param $engine
     * @param $cargo
     * @param $tiers
     */
    public function __construct($model, Engine $engine, CargoCar $cargo, $tiers)
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->cargo = $cargo;
        $this->tiers = $tiers;
    }

    private function isFragile() :bool {
        $cargo_type = $this->cargo->getType();
        if ($cargo_type === 'fragile') {
            return true;
        } else {
            return false;
        }
    }

    private function isFlamable() :bool {
        $cargo_type = $this->cargo->getType();

        if ($cargo_type === 'flamable') {
            return true;
        } else {
            return false;
        }
    }

    private function lowPresureTire () : bool {
        $pressure_below_one = false;
        foreach ($this->tiers as $tier) {
            if ($tier->getPressure() < 1) {
                $pressure_below_one = true;
            }
        }
        return $pressure_below_one;
    }

    private function bigEnginePower () : bool {
        $big_engine_power = true;
        if ($this->engine->getPower() <= 250) {
            $big_engine_power = false;
        }
        return $big_engine_power;
    }

    public function printFlamable () :void {
        $flamable = $this->isFlamable();
        $engine_power = $this->bigEnginePower();
        if ($flamable && $engine_power) {
            echo $this->model . PHP_EOL;
        }
    }

    public function printFragile () :void {
        $fragile = $this->isFragile();
        $pressure_tire = $this->lowPresureTire();
        if ($fragile && $pressure_tire) {
            echo $this->model . PHP_EOL;
        }
    }

}