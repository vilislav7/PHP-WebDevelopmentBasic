<?php

class Pokemon
{
    private $name;
    private $type;

    /**
     * Pokemon constructor.
     * @param $name
     * @param $type
     */
    public function __construct(string $name, string $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    public function __toString()
    {
        return $this->name.' '.$this->type.PHP_EOL;
    }

}