<?php

$num1 = (int)(readline('first num! '));
$num2 = (int)(readline('second num! '));
$num3 = (int)(readline('third num! '));

$max = $num1;

if ($num2 > $max) {
    $max = $num2;
}

if ($num3 > $max) {
    $max = $num3;
}

echo $max;