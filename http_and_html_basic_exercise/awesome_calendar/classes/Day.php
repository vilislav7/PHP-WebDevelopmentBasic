<?php

class Day
{
    private $month;
    private $weekDay;
    private $weekIndex;
    private $date;
    private $year;
    private static $week = 0;

    /**
     * Day constructor.
     * @param $year
     * @param $month
     * @param $date
     */
    public function __construct(Year $year, Month $month, int $date) {
        $this->year = $year;
        $this->month = $month;
        $this->date = $date;

        $this->setWeekDay();
    }

    /**
     * @return string
     */
    public function getWeekDay() : string
    {
        return $this->weekDay;
    }

    /**
     * @return string
     */
    public function getDate() : string
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getWeekIndex()
    {
        return $this->weekIndex;
    }

    /**
     * @return Year
     */
    public function getYear() : Year
    {
        return $this->year;
    }

    /**
     * @return Month
     */
    public function getMonth() : Month
    {
        return $this->month;
    }

    /**
     * @return int
     */
    public function getWeek(): int
    {
        $date = "{$this->year->getYear()}-{$this->month->getMonthNum()}-{$this->date}";
        $day = (int)date('w', strtotime($date));
        $week = ceil((date('d',strtotime($date)) - date('w',strtotime($date)) - 1) / 7);

        if ($day === 0) {
            return $week;
        }
        return $week + 1;
    }

    private function setWeekDay () : void {
        $date = "{$this->year->getYear()}-{$this->month->getMonthNum()}-{$this->date}";
        $day = (int)date('w', strtotime($date));

        $this->weekDay = date('l', strtotime($date));
        $this->weekIndex = $day > 0 ? $day : 7;
    }
}