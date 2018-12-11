<?php





$num_string = readline();
$num_arr = str_split($num_string);

function averageValueOfAllDigits ($num_arr) {
    $count = count($num_arr);

    $sum = 0;
    for ($i = 0; $i<$count; $i++) {
        $current_digit = $num_arr[$i];
        $sum += (int)$current_digit;

    }

    return $sum / $count;
}

while (averageValueOfAllDigits($num_arr) < 5) {
    $num_arr[] = '9';
    averageValueOfAllDigits($num_arr);
}

echo implode('', $num_arr);