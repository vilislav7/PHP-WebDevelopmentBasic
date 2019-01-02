<?php

class Mood
{
    private $name;
    private $points;

    public function __construct($points)
    {
        $this->points = $points;
        $this->setName();
    }

    private function setName() : void {
        if ($this->points < -5) {
            $this->name = 'Angry';
        } elseif ($this->points >= -5 && $this->points < 0) {
            $this->name= 'Sad';
        } elseif ($this->points >= 0 && $this->points <= 15) {
            $this->name = 'Happy';
        } else {
            $this->name = 'PHP';
        }
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPoints() : int {
        return $this->points;
    }

}