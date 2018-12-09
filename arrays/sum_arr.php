<?php
/**
 * Created by PhpStorm.
 * User: Vilislav
 * Date: 29.11.2018 г.
 * Time: 1:07
 */

$arr_string1 = readline();
$arr_string2 = readline();

$arr1 = explode(' ', $arr_string1);
$arr2 = explode(' ', $arr_string2);

$len_arr1 = count($arr1);
$len_arr2 = count($arr2);

if ($len_arr2 > $len_arr1) {
    /**  arr1 will be the biggest arr */
    $temp = $arr1;
    $arr1 = $arr2;
    $arr2 = $temp;
}

$count_to_next_step = 0;
$steps = 1;

for ($i = 0; $i < count($arr1); $i++) {
    $first = $arr1[$i];
    $k = $i;
    if ($k >= count($arr2)) {
        $count_to_next_step++;
        if ($count_to_next_step > count($arr2)) {
            $count_to_next_step = 1;
            $steps++;
        }
        $k = $k - (count($arr2)*$steps);
    }
    $second = $arr2[$k];

    echo ($first + $second). ' ';
}