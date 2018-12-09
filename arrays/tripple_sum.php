<?php
/**
 * Created by PhpStorm.
 * User: Vilislav
 * Date: 29.11.2018 г.
 * Time: 0:21
 */

$arr_string = readline();
$arr = explode(' ', $arr_string);

$len = count($arr);

$found = false;

for ($i = 0; $i < $len - 1; $i++) {
    $a = $arr[$i];
    for ($j = $i + 1; $j < $len; $j++) {
        $b = $arr[$j];
        for ($k = 0; $k < $len; $k++) {
            $c = $arr[$k];

            if ($a + $b == $c) {
                echo $a.' + '.$b.' == '.$c.PHP_EOL;
                $found = true;
            }
        }
    }
}

if (!$found) {
    echo 'No'.PHP_EOL;
}