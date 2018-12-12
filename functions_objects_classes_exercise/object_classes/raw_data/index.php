<?php

include 'CargoCar.php';
include 'CarAnother.php';
include 'Tire.php';
include 'Engine.php';

$num = (int)readline();
$cars = [];

for ($i = 0; $i<$num; $i++) {
    $tires = [];
    $line = readline();
    $input_info = explode(' ', $line);
    $model = $input_info[0];
    $engine_speed = $input_info[1];
    $engine_power = $input_info[2];
    $cargo_weight = $input_info[3];
    $cargo_type = $input_info[4];
    $tire_presure_one= $input_info[5];
    $tire_age_one= $input_info[6];
    $tire_presure_two= $input_info[7];
    $tire_age_two= $input_info[8];
    $tire_presure_three= $input_info[9];
    $tire_age_three= $input_info[10];
    $tire_presure_four= $input_info[11];
    $tire_age_four= $input_info[12];


    $engine = new Engine($engine_speed, $engine_power);
    $cargo = new CargoCar($cargo_weight, $cargo_type);
    $tires [] = new Tire($tire_age_one, $tire_presure_one);
    $tires [] = new Tire($tire_age_two, $tire_presure_two);
    $tires [] = new Tire($tire_age_three, $tire_presure_three);
    $tires [] = new Tire($tire_age_four, $tire_presure_four);

    $cars[] = new CarAnother($model, $engine, $cargo, $tires);
}

$method = readline();

if ($method === 'fragile') {
    foreach ($cars as $car) {
        $car->printFragile();
    }
} elseif ($method === 'flamable') {
    foreach ($cars as $car) {
        $car->printFlamable();
    }
}