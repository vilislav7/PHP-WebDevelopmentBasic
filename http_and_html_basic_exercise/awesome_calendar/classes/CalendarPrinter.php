<?php

include_once 'classes.php';

class CalendarPrinter
{
    private $year;
    public const ROWS = 6;
    public const COLS = 7;

    /**
     * CalendarPrinter constructor.
     * @param $year
     */
    public function __construct($year)
    {
        $y = new Year($year);
        $this->year = $y;

        $this->printMonth(2);
    }

    private function getMonthDays(int $month) : array {
        $desiredMonth = $this->year->getMonth($month);
        return $desiredMonth->getDays();
    }
}

$c = new CalendarPrinter(2018);