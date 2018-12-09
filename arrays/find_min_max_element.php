<?php
/**
 * Created by PhpStorm.
 * User: Vilislav
 * Date: 29.11.2018 г.
 * Time: 15:24
 */

$input_str = readline();
$input_arr = explode(', ', $input_str);

$rows = $input_arr[0];
$cols = $input_arr[1];

$matrix = [];

for ($r = 0; $r < $rows; $r ++) {
    $row = readline();
    $row_arr = explode(', ', $row);
    $matrix[$r] = $row_arr;
}

$max_num = $matrix[0][0];
$min_num = $matrix[0][0];

for ($r = 0; $r < $rows; $r ++) {
    for ($c = 0; $c < $cols; $c ++) {
        $current_num = $matrix[$r][$c];
        if ($current_num > $max_num) {
            $max_num = $current_num;
        }

        if ($current_num < $min_num) {
            $min_num = $current_num;
        }
    }
}

echo 'Min: ' . $min_num . PHP_EOL;
echo 'Max: ' . $max_num . PHP_EOL;