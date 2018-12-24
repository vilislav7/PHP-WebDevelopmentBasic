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
        $this->fulfillCalendar();
    }

    private function getMonthDays ($month) : int {
        return cal_days_in_month(CAL_GREGORIAN, $month, $this->year);
    }

    private function getWeekDay ($month, $day) : string {
        $date = "{$this->year}-{$month}-{$day}";
        return date('l', strtotime($date));
    }

    private function fulfillCalendar () :void {
        foreach ($this->months as $month) {
            $monthDays = $this->getMonthDays($month);
            $dateToDayOfWeek = [];

            for ($i = 1; $i <= $monthDays; $i++) {
                $currentDay = $i;
                $currentDayOfWeek = $this->getWeekDay($month, $currentDay);
                $dateToDayOfWeek[$currentDay] = $currentDayOfWeek;

                $this->calendar[$month] = $dateToDayOfWeek;
            }
        }
    }
}