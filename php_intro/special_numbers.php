<?php

$n = (int)readline('');

for ($i=1; $i <= $n; $i ++) {
    $string_i = (string)$i;
    $string_i_length = strlen($string_i);

    $current_sum = 0;
    for ($j=0; $j < $string_i_length; $j++) {
        $current_num = $string_i[$j];
        $current_sum += $current_num;
    }

    if ($current_sum === 5 || $current_sum === 7 || $current_sum === 11) {
        echo $i. ' -> True'.PHP_EOL;
    } else {
        echo $i. ' -> False'.PHP_EOL;
    }
}