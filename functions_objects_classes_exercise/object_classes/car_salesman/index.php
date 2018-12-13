<?php

include 'Car.php';

$cars = [];
$engines = [];

$engine_count = (int)readline();
for($i = 0; $i < $engine_count; $i++) {
    $engine_info = readline();
    $engine_info = explode(' ', $engine_info);

    $engine_model = $engine_info[0];
    $engine_power = $engine_info[1];

    $engine = new Engine($engine_model, $engine_power);
    if (count($engine_info) > 2) {
        if(is_numeric($engine_info[2])) {
            $engine->setDisplacement($engine_info[2]);
        } else {
            $engine->setEfficiency($engine_info[2]);
        }

        if (count($engine_info) > 3) {
            $engine->setEfficiency($engine_info[3]);
        }
    }
    $engines[] = $engine;
}

$car_num = (int)readline();
for ($i = 0; $i < $car_num; $i ++) {
    $car_info = readline();
    $car_info = explode(' ', $car_info);

    $car_model = $car_info[0];
    $car_engine = $car_info[1];

    foreach ($engines as $engine) {
        if ($engine->getModel() === $car_engine) {
            $car = new Car($car_model, $engine);

            if (count($car_info) > 2) {
                if (is_numeric($car_info[2])) {
                    $car->setWeight($car_info[2]);
                } else {
                    $car->setColor($car_info[2]);
                }

                if (count($car_info) > 3) {
                    $car->setColor($car_info[3]);
                }
            }
            $cars[] = $car;
        }
    }
}

foreach ($cars as $car) {
    echo $car;
}