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

    public function printMonth (int $month) : void {
        $monthDays = $this->getMonthDays($month);

        echo '<table>'.PHP_EOL;
        echo "<p> Month {$month}" . '</p><br>';

        echo '  <tr>'.PHP_EOL;
        echo '    <th>'.PHP_EOL;
        echo '      Mo'.PHP_EOL;
        echo '    </th>'.PHP_EOL;
        echo '    <th>'.PHP_EOL;
        echo '      Tu'.PHP_EOL;
        echo '    </th>'.PHP_EOL;
        echo '    <th>'.PHP_EOL;
        echo '      We'.PHP_EOL;
        echo '    </th>'.PHP_EOL;
        echo '    <th>'.PHP_EOL;
        echo '      Th'.PHP_EOL;
        echo '    </th>'.PHP_EOL;
        echo '    <th>'.PHP_EOL;
        echo '      Fr'.PHP_EOL;
        echo '    </th>'.PHP_EOL;
        echo '    <th>'.PHP_EOL;
        echo '      Sa'.PHP_EOL;
        echo '    </th>'.PHP_EOL;
        echo '    <th>'.PHP_EOL;
        echo '      Su'.PHP_EOL;
        echo '    </th>'.PHP_EOL;
        echo '  </tr>'.PHP_EOL;

        for ($row = 1; $row <= self::ROWS; $row ++) {
            echo '  <tr>'.PHP_EOL;
            for ($col = 1; $col <= self::COLS; $col ++) {
                $currentDay = null;

                foreach ($monthDays as $day) {
                    $weekIndex = $day->getWeekIndex();
                    $week = $day->getWeek();

                    if ($row === $week && $col === $weekIndex) {
                        $currentDay = $day;
                        break;
                    }

                }
                echo '  <td>'.PHP_EOL;

                if (isset($currentDay)) {
                    echo $currentDay->getDate().PHP_EOL;
                } else {
                    echo ' '.PHP_EOL;
                }
                echo '    </td>'.PHP_EOL;
            }
            echo '  </tr>'.PHP_EOL;

        }
        echo '</table>'.PHP_EOL;

    }

    private function getMonthDays(int $month) : array {
        $desiredMonth = $this->year->getMonth($month);
        return $desiredMonth->getDays();
    }
}

$c = new CalendarPrinter(2018);