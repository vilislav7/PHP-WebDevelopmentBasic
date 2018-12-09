<?php
/**
 * Created by PhpStorm.
 * User: Vilislav
 * Date: 28.11.2018 г.
 * Time: 23:55
 */

$len = intval(readline());
$reversed_arr = Array();

for ($i = 0; $i < $len; $i++) {
    $current_num = intval(readline());
    $reversed_arr[$len - $i - 1] = $current_num;
}

ksort($reversed_arr);
$reversed_arr_string = implode(' ', $reversed_arr);

echo $reversed_arr_string;