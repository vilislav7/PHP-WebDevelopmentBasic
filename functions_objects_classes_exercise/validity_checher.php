<?php




$input = readline();

$input_arr = explode(', ', $input);
$x1 = (int)$input_arr[0];
$y1 = (int)$input_arr[1];
$x2 = (int)$input_arr[2];
$y2 = (int)$input_arr[3];

function validityChecker (int $x1, int $y1, int $x2 = 0, int $y2 = 0) {
    $x = abs($x1 - $x2);
    $y = abs($y1 - $y2);

    $value = sqrt($x*$x + $y*$y);
    echo '{'. $x1.', '. $y1.'} to {'. $x2 .', '.$y2.'} is ' ;



    if ((int)$value == $value) {
        echo 'valid'.PHP_EOL;
    } else {
        echo 'invalid'.PHP_EOL;
    }
}

validityChecker($x1, $y1);
validityChecker($x2, $y2);
validityChecker($x1, $y1, $x2, $y2);

