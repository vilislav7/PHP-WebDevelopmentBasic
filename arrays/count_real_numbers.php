<?php
/**
 * Created by PhpStorm.
 * User: Vilislav
 * Date: 29.11.2018 г.
 * Time: 15:55
 */

$input_str = readline();
$input_arr = explode(' ', $input_str);

$len = count($input_arr);
$arr = [];

for ($i = 0; $i < $len; $i++) {
    $current = $input_arr[$i];
    if (!array_key_exists($current, $arr)) {
        $arr[$current] = 1;
    } else {
        $arr[$current] ++;
    }
}

ksort($arr);

foreach ($arr as $key => $curr) {
    echo $key . ' -> ' . $curr . PHP_EOL;
}
