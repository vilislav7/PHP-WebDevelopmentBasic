<?php

class CalendarPrinter
{
    private $year;
    private $months;
    private $calendar;
    private $calendarByMonthsWeeksAndDays;

    /**
     * CalendarPrinter constructor.
     * @param $year
     */
    public function __construct($year)
    {
        $this->year = $year;
        $this->months = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
        $this->calendar = [];
        $this->calendarByMonthsWeeksAndDays = [];

        $this->fulfillCalendar();
        $this->fulfillCalendarByMonthsWeeksAndDays();
    }

    private function getMonthDays ($month) : int {
        return cal_days_in_month(CAL_GREGORIAN, $month, $this->year);
    }

    private function getWeekDay ($month, $day) : string {
        $date = "{$this->year}-{$month}-{$day}";
        return date('l', strtotime($date));
    }

    private function fulfillCalendar () {
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

    private function fulfillCalendarByMonthsWeeksAndDays () :void {
        $monthToWeekDaysArr = [];

        foreach ($this->calendar as $monthIndex=>$month) {
            $week = 1;
            foreach ($month as $date => $day) {
                $monthToWeekDaysArr[$monthIndex][$week][$day] = $date;

                if ($date === 1) {
                    $week = 1;
                }

                if ($day === 'Sunday') {
                    $week ++;
                }

            }
        }


        $this->calendarByMonthsWeeksAndDays = $monthToWeekDaysArr;
    }
}



