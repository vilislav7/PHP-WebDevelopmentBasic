<?php
/**
 * Created by PhpStorm.
 * User: Vilislav
 * Date: 30.11.2018 г.
 * Time: 18:02
 */

function dayOfWeek (string $day) :int {
    $day = strtolower($day);
    switch ($day) {
        case 'monday' : return 1;
            break;
        case 'tuesday' : return 2;
            break;
        case 'wednesday' : return 3;
            break;
        case 'thursday' : return 4;
            break;
        case 'friday' : return 5;
            break;
        case 'saturday' : return 6;
            break;
        case 'sunday' : return 7;
            break;
        default: return 0;
            break;
    }
}

$day_as_string = readline();
$day_of_week_as_int = dayOfWeek($day_as_string);

if ($day_of_week_as_int !== 0) {
    echo $day_of_week_as_int;
} else {
    echo 'Invalid day!';
}