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
        return date('w', strtotime($date));
    }

    private function fulfillCalendar () : void {
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

                if ($day === 7) {
                    $week ++;
                }
            }
        }


        $this->calendarByMonthsWeeksAndDays = $monthToWeekDaysArr;
    }

    public function printMonth ($month) :void {
        $currentMonth = $this->calendarByMonthsWeeksAndDays[$month];
        var_dump($currentMonth);
        $currentMonthCount = count($currentMonth);

        for ($i = 1; $i <= $currentMonthCount; $i++) {
            $currentWeek = $currentMonth[$i];
            $currentWeekCount = count($currentWeek);

            for ($j = 1; $j < $currentWeekCount; $j++){
                $currentDay = $currentWeek[$j];
                echo $currentDay. ' - ';
            }
            echo PHP_EOL;
        }
    }
}

$d = new CalendarPrinter(2018);
$d->printMonth(1);


