<?php
include_once 'Engine.php';

class Car
{
    private $model;
    private $engine;
    private $weight = 'n/a';
    private $color = 'n/a';

    /**
     * Car constructor.
     * @param $model
     * @param $engine
     */
    public function __construct($model,Engine $engine)
    {
        $this->setModel($model);
        $this->setEngine($engine);
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model): void
    {
        $this->model = $model;
    }

    /**
     * @param mixed $engine
     */
    public function setEngine($engine): void
    {
        $this->engine = $engine;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function __toString()
    {
        $engine_model = $this->engine->getModel();
        return "$this->model:".PHP_EOL."  $engine_model:".PHP_EOL.$this->engine."  Weight: $this->weight".PHP_EOL."  Color: $this->color".PHP_EOL;
    }


}

