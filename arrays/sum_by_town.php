<?php
/**
 * Created by PhpStorm.
 * User: Vilislav
 * Date: 30.11.2018 г.
 * Time: 11:25
 */

$input_string = readline();
$input_string_as_array = explode(', ', $input_string);
$arr_len = count($input_string_as_array);
$towns_sums = [];

$town = '';
$sum = 0;

for ($i = 0; $i < $arr_len; $i ++) {
    if ($i % 2 === 0) {
        $town = $input_string_as_array[$i];
    } else {
        $sum = intval($input_string_as_array[$i]);
        if (!array_key_exists($town, $towns_sums)) {
            $towns_sums[$town] = 0;
        }
        $towns_sums[$town] += $sum;
    }
}

foreach ($towns_sums as $town => $sum) {
    echo $town . ' => ' . $sum . PHP_EOL;
}