<?php

include_once 'Person.php';

$people = [];

while (1) {
    $line = readline();

    if($line === 'End') {
        break;
    }
    $person_info = explode(' ', $line);
    $person_name = $person_info[0];

    if (!array_key_exists($person_name, $people)) {
        $person = new Person($person_name);
        $people[$person_name] = $person;
    }

    $person = $people[$person_name];
    $info = $person_info[1];
    $arg1 = $person_info[2];
    $arg2 = $person_info[3];
    $arg3 = count($person_info) > 4 ? $person_info[4] : null;

    $person->addInfo($info, $arg1, $arg2, $arg3);

}

$searched_person = readline();

echo $people[$searched_person];