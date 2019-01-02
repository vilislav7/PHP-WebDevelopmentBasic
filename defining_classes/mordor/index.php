<?php

require_once 'FoodFactory.php';
require_once 'Mood.php';

$ff = new FoodFactory(readline());
$points = $ff->getPointOfHappiness();

$mood = new Mood($points);
echo $mood->getPoints().PHP_EOL;
echo $mood->getName();

