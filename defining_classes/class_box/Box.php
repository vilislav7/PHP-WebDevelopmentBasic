<?php

class Box
{
    private $a;
    private $b;
    private $c;
    private $error;

    public function __construct(float $a,float $b,float $c)
    {
        $this->error = false;

        $this->setA($a);
        $this->setB($b);
        $this->setC($c);
    }

    private function setA(float $a): void
    {
        if ($a > 0) {
            $this->a = $a;
        } else {
            $this->error = true;
            throw new Exception('Length cannot be zero or negative.');
        }
    }

    private function setB(float $b): void
    {
        if ($b > 0) {
            $this->b = $b;
        } else {
            $this->error = true;
            throw new Exception('Width cannot be zero or negative.');
        }
    }

    private function setC(float $c): void
    {
        if ($c > 0) {
            $this->c = $c;
        } else {
            $this->error = true;
            throw new Exception('Height cannot be zero or negative.');
        }
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
        if (!$this->error) {
            $surfaceArea = number_format($this->surfaceArea(), 2, '.', '');
            $lateralSurfaceArea = number_format($this->lateralSurfaceArea(), 2, '.', '');
            $volume = number_format($this->volume(), 2, '.', '');

            $boxToString = 'Surface Area - ' . $surfaceArea . PHP_EOL;
            $boxToString .= 'Lateral Surface Area - ' . $lateralSurfaceArea . PHP_EOL;
            $boxToString .= 'Volume - ' . $volume . PHP_EOL;

            return $boxToString;
        } else {
            return '';
        }
    }
}

