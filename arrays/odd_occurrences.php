<?php
/**
 * Created by PhpStorm.
 * User: Vilislav
 * Date: 29.11.2018 г.
 * Time: 16:09
 */

$input_str = readline();
$input_arr = explode(' ', $input_str);

$len = count($input_arr);
$arr = [];

for ($i = 0; $i < $len; $i++) {
    $current = strtolower($input_arr[$i]);
    if (!array_key_exists($current, $arr)) {
        $arr[$current] = 1;
    } else {
        $arr[$current] ++;
    }
}

$result_arr = [];

foreach ($arr as $key => $item) {
    if ($item % 2 !== 0) {
        array_push($result_arr, $key);
    }
}

echo implode(', ', $result_arr);