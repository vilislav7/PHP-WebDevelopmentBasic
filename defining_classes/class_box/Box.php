<?php

class Box
{
    private $a;
    private $b;
    private $c;

    public function __construct(float $a,float $b,float $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function volume() {
        return $this->a * $this->b * $this->c;
    }

    public function surfaceArea() {
        return 2*$this->a*$this->b + 2*$this->a*$this->c + 2*$this->b*$this->c;
    }

    public function lateralSurfaceArea() {
        return 2*$this->a*$this->c + 2*$this->b*$this->c;
    }

    public function __toString()
    {
        $surfaceArea = number_format($this->surfaceArea(), 2, '.', '');
        $lateralSurfaceArea = number_format($this->lateralSurfaceArea(), 2, '.', '');
        $volume = number_format($this->volume(), 2, '.', '');

        $boxToString = 'Surface Area - ' . $surfaceArea . PHP_EOL;
        $boxToString .= 'Lateral Surface Area - ' . $lateralSurfaceArea . PHP_EOL;
        $boxToString .= 'Volume - ' . $volume . PHP_EOL;

        return $boxToString;
    }
}