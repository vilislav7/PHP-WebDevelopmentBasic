<?php
/**
 * Created by PhpStorm.
 * User: Vilislav
 * Date: 29.11.2018 г.
 * Time: 10:48
 */

$input_str = readline();
$input_arr = explode(', ', $input_str);

$n = intval($input_arr[0]);
$pattern = $input_arr[1];


if ($pattern === 'A') {
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            $current_num_to_push = $j*$n + ($i + 1);
            echo $current_num_to_push. ' ';
        }
        echo PHP_EOL;
    }
} else if ($pattern === 'B') {
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($j % 2 === 0 && $j !== 0) {
//            2, 4, 6, 8, 10.... col
                echo ($n*$j + $i + 1) . ' ';
            } else if ($j === 0) {
                echo (1+$i) . ' ';
            } else {
                echo ($n * ($j+1)) - $i . ' ';
            }
        }
        echo PHP_EOL;
    }
} else {
    echo 'Wrong format!';
}




