<?php
/**
 * Created by PhpStorm.
 * User: Vilislav
 * Date: 30.11.2018 г.
 * Time: 18:14
 */
function insideVolume (int $x, int $y, int $z) : bool  {

    $x_1 = 10;
    $x_2 = 50;
    $y_1 = 20;
    $y_2 = 80;
    $z_1 = 15;
    $z_2 = 50;

    $is_x_inside_x_axis = $x >= $x_1 && $x <=$x_2;
    $is_y_inside_y_axis = $y >= $y_1 && $y <= $y_2;
    $is_z_inside_z_axis = $z >= $z_1 && $z <= $z_2;

    if ($is_x_inside_x_axis && $is_y_inside_y_axis && $is_z_inside_z_axis) {
        return true;
    } else {
        return false;
    }
}

$input_string = readline();
$input_arr = explode(', ', $input_string);

while (count($input_arr) > 0) {
    $x = array_shift($input_arr);
    $y = array_shift($input_arr);
    $z = array_shift($input_arr);

    $is_inside_box = insideVolume($x, $y, $z);
    if ($is_inside_box) {
        echo 'inside' . PHP_EOL;
    } else {
        echo 'outside' . PHP_EOL;
    }
}


