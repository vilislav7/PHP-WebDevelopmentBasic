<?php

class CalendarPrinter
{
    private $year;
    private $months;
    private $calendar;

    /**
     * CalendarPrinter constructor.
     * @param $year
     */
    public function __construct($year)
    {
        $this->year = $year;
        $this->months = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
        $this->calendar = [];
    }

    private function getMonthDays ($month) : int {
        return cal_days_in_month(CAL_GREGORIAN, $month, $this->year);
    }

    private function getWeekDay ($month, $day) : string {
        $date = "{$this->year}-{$month}-{$day}";
        return date('l', strtotime($date));
    }
}