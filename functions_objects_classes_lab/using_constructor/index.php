<?php

include('Person.php');

$persons = Array();

while (1) {
    $line = readline();

    if ($line === 'END') {
        break;
    }

    $line_arr = explode(' ', $line);

    $name = $line_arr[0];
    $age = $line_arr[1];
    $occupation = $line_arr[2];

    $person = new PersonSecond($name, $age, $occupation);

    $persons[] = $person;
}
function cmp ($a, $b) {
    return $a->age - $b->age;
}

usort($persons, 'cmp');

foreach ($persons as $person) {
    echo "$person->name - age: $person->age, occupation: $person->occupation " . PHP_EOL;
}