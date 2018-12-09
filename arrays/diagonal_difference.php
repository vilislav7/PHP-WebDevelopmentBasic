<?php
/**
 * Created by PhpStorm.
 * User: Vilislav
 * Date: 29.11.2018 г.
 * Time: 15:33
 */

$n = intval(readline());

$matrix = [];
$left_sum = 0;
$right_sum = 0;

for ($i = 0; $i<$n; $i++) {
    $row = explode(' ', readline());
    $matrix[] = $row;
}

for ($r = 0; $r < $n; $r ++) {
    array_push($matrix, []);
    for ($c = 0; $c < $n; $c ++) {
        if ($r === $c) {
            $right_sum += $matrix[$r][$c];
        }

        if ($c === ($n-1 - $r)) {
            $left_sum += $matrix[$r][$c];
        }
    }
}

$diagonal_diff = abs($right_sum - $left_sum);

echo $diagonal_diff;
