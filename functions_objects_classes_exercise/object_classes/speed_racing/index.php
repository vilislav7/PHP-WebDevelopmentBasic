<?php

include 'Car.php';

$count = (int)readline();
$cars = [];

for ($i = 0; $i < $count; $i ++) {
    $line = readline();
    $car_info = explode(' ', $line);

    $model = $car_info[0];
    $fuel_amount = (float)$car_info[1];
    $fuel_consume = (float)$car_info[2];

    $cars[] = new Car($model, $fuel_amount, $fuel_consume);
}

while (1) {
    $line = readline();

    if ($line === 'End') {
        break;
    }

    $drive_info = explode(' ', $line);
    $model = $drive_info[1];
    $distance = (float)$drive_info[2];

    foreach ($cars as $car) {
        $car_model = $car->getModel();
        if ($car_model === $model) {
            if (!$car->drive($distance)) {
                echo 'Insufficient fuel for the drive'.PHP_EOL;
            }
        }
    }
}

foreach ($cars as $car) {
    echo $car;
}
