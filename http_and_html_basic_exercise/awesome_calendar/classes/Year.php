<?php

require_once 'classes.php';

class Year
{
    private $year;
    private $months;
    public const MONTHS = [
        1 => 'January',
        2 => 'February',
        3 => 'March',
        4 => 'April',
        5 => 'May',
        6 => 'June',
        7 => 'July',
        8 => 'August',
        9 => 'September',
        10 => 'October',
        11 => 'November',
        12 => 'December'
    ];

    public function __construct($year)
    {
        $this->year = $year;
        $this->createMonths();
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @return mixed
     */
    public function getMonths()
    {
        return $this->months;
    }


    private function getMonthSize($month): int {
        return cal_days_in_month(CAL_GREGORIAN, $month, $this->year);
    }

    private function createMonths() : void {
        foreach ($this::MONTHS as $index => $monthName) {
            $this -> months[] = new Month($this, $monthName, $index, $this->getMonthSize($index));
        }
    }
}

$year = new Year(2018);
$months = $year->getMonths();

foreach ($months as $month) {
    echo $month->getName() . ' - ';
    echo $month->getSize().' size. ';
    echo $month->getMonthNum() . 'th month';
    echo '<br>';
    $days = $month->getDays();
    echo '<ul>';
    foreach ($days as $day) {
        echo '<li>' . $day->getWeekDay().' - '. $day->getWeekIndex().'th day of the week.'.' Week number - '. $day->getWeek() .'</li>';
        echo '<br>';
    }
    echo '</ul>';
    echo '<br>';

}