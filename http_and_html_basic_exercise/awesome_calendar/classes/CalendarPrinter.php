<?php

include_once 'classes.php';

class CalendarPrinter
{
    private $year;

    /**
     * CalendarPrinter constructor.
     * @param $year
     */
    public function __construct($year)
    {
        $y = new Year($year);
        $this->year = $y;
    }
}