<?php
/**
 * Created by PhpStorm.
 * User: Vilislav
 * Date: 29.11.2018 г.
 * Time: 0:59
 */

$arr_string = readline();
$arr = explode(' ', $arr_string);

for ($i = 0; $i < count($arr); $i++) {
    $curr = $arr[$i];
    $rounded = round($curr, 0, PHP_ROUND_HALF_UP);

    echo $curr.' => '.$rounded.PHP_EOL;
}