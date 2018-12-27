<?php

include_once 'classes.php';

class CalendarPrinter
{
    private $year;
    public const ROWS = 6;
    public const COLS = 7;
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

    /**
     * CalendarPrinter constructor.
     * @param $year
     */
    public function __construct($year)
    {
        $y = new Year($year);
        $this->year = $y;

        foreach (self::MONTHS as $month=>$monthName) {
            $this->printMonth($month, $monthName);
        }

    }

    public function printMonth (int $month, string $monthName) : void {
        $monthDays = $this->getMonthDays($month);


        echo '<div class="table">';
        echo '<table align="center">'.PHP_EOL;
        echo "<p class='monthName' align='center'> {$monthName}" . '</p><br>';

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
        echo '</div>';

    }

    private function getMonthDays(int $month) : array {
        $desiredMonth = $this->year->getMonth($month);
        return $desiredMonth->getDays();
    }
}
