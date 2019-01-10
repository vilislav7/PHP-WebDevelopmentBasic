<?php

$parents = [];
$children = [];
$person = new Person();
$firstLine = readline();

if (strpos($firstLine, ' ') >= 0) {
//    firstLine is person first name and last name
    [$firstName, $lastName] = explode(' ', $firstLine);
    $person->setFirstName($firstName);
    $person->setLastName($lastName);
} else {
//    firstLine is birth date
    $person->setBirthDate($firstLine);
}

