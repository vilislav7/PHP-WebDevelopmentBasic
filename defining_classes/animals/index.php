<?php

spl_autoload_register();
include_once 'functions.php';

while (true) {
    $line = readline();

    if ($line === 'Beast!') {
        break;
    }

    $animalInfo = explode(' ', readline());
    $gender = null;
    $name = $animalInfo[0];
    $age = (int)$animalInfo[1];

    if (count($animalInfo) > 2) {
        $gender = $animalInfo[2];
    }

    if ($line === 'Beast!') {
        break;
    }

    try {
        createAnimal($line, $name, $age, $gender);
    } catch (Exception $exception) {
        $exception->getMessage();
    }
}