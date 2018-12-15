<?php

class DateModifier
{
    private $date;

    public function __construct(DateTime $date)
    {
        $this->date = $date;
    }

    public function printDateDiff (DateTime $newDate) :void {
        echo abs($this->date->diff($newDate)->format("%a"));
    }
}

