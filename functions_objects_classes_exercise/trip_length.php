<?php

$input = readline();
//$input = '-1, -2, 3.5, 0, 0, 2';
$input_arr = explode(', ', $input);

$first_x = $input_arr[0];
$first_y = $input_arr[1];
$second_x = $input_arr[2];
$second_y = $input_arr[3];
$third_x = $input_arr[4];
$third_y = $input_arr[5];

$first_second_diff = differeneBetweenTwoPoints($first_x, $first_y, $second_x, $second_y);
$first_third_diff = differeneBetweenTwoPoints($first_x, $first_y, $third_x, $third_y);
$second_third_diff = differeneBetweenTwoPoints($second_x, $second_y, $third_x, $third_y);

$obj1 = new stdClass();
$obj1->from = 1;
$obj1->to = 2;
$obj1->diff = $first_second_diff;

$obj2 = new stdClass();
$obj2->from = 1;
$obj2->to = 3;
$obj2->diff = $first_third_diff;

$obj3 = new stdClass();
$obj3->from = 2;
$obj3->to = 3;
$obj3->diff = $second_third_diff;

$arr = [];
$obj_arr = [];

$obj_arr[] = $obj1;
$obj_arr[] = $obj2;
$obj_arr[] = $obj3;

function cmp ($first, $second) {
    return $first->diff > $second->diff;
}
usort($obj_arr, 'cmp');

array_pop($obj_arr);
$sum = $obj_arr[0]->diff + $obj_arr[1]->diff;

$point_count = [];

foreach ($obj_arr as $item) {
    $from = $item->from;
    $to = $item->to;

    if (!array_key_exists($from, $point_count)) {
        $point_count[$from] = 1;
    } else {
        $point_count[$from] ++ ;
    }

    if (!array_key_exists($to, $point_count)) {
        $point_count[$to] = 1;
    } else {
        $point_count[$to] ++ ;
    }
}
asort($point_count);

$first_point = 0;
$middle_point = 0;
$last_point = 0;

if ($point_count[1] === 2) {
    $middle_point = 1;
    unset($point_count[1]);
} elseif ($point_count[2] === 2) {
    $middle_point = 2;
    unset($point_count[2]);
} elseif ($point_count[3] === 2) {
    $middle_point = 3;
    unset($point_count[3]);
}

ksort($point_count);

$times = 0;

foreach ($point_count as $point=>$count) {
    if ($times === 0) {
        $first_point = $point;
    } elseif ($times === 1) {
        $last_point = $point;
    }

    $times++;
}

echo "$first_point->$middle_point->$last_point: ". $sum . PHP_EOL;

function differeneBetweenTwoPoints(float $x1, float $y1, float $x2, float $y2) {
    $x = abs($x1 - $x2);
    $y = abs($y1 - $y2);

    return sqrt($x*$x + $y*$y);
}