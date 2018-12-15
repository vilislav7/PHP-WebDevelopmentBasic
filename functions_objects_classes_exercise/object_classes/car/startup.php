<?php

include_once 'Car.php';

$input = explode(' ', fgets(STDIN));
$speed = (float)$input[0];
$fuel = (float)$input[1];
$fuelEconomy = (float)$input[2];
$car = new Car($speed, $fuel, $fuelEconomy);
while (true) {
    $commands = explode(' ', fgets(STDIN));
    if (trim($commands[0]) === 'END') {
        break;
    } else if (trim($commands[0]) === 'Travel') {
        $car->travel((float)$commands[1]);
    } else if (trim($commands[0]) === 'Refuel') {
        $car->reFuel((float)$commands[1]);
    } else if (trim($commands[0]) === 'Distance') {
        $car->printDistance();
    } else if (trim($commands[0]) === 'Time') {
        $car->printTime();
    } else if (trim($commands[0]) === 'Fuel') {
        $car->printFuel();
    }
}