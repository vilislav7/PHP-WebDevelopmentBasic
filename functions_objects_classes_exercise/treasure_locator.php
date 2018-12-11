<?php

$input = readline();
$input_arr = explode(', ', $input);

/**
 * @param $first_value
 * @param $second_value
 */
function treasureLocator($first_value, $second_value): void {
    if (($first_value >= 1 && $first_value<=3) && ($second_value >= 1 && $second_value <=3)) {
        echo 'Tuvalu';
    } elseif (($first_value >= 8 && $first_value<=8) && ($second_value >= 0 && $second_value <=1)) {
        echo 'Tokelau';
    } elseif (($first_value >= 5 && $first_value<=7) && ($second_value >= 3 && $second_value <=6)) {
        echo 'Samoa';
    } elseif (($first_value >= 0 && $first_value<=2) && ($second_value >= 6 && $second_value <=8)) {
        echo 'Tonga';
    } elseif (($first_value >= 4 && $first_value<=9) && ($second_value >= 7 && $second_value <=9)){
        echo 'Cook';
    } else {
        echo 'On the bottom of the ocean';
    }
}

while (count($input_arr) > 0) {
    $first_value = array_shift($input_arr);
    $second_value = array_shift($input_arr);

    echo PHP_EOL;

    treasureLocator($first_value, $second_value);
}