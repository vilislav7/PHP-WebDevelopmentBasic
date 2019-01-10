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

while (true) {
    $line = readline();
    if ($line === 'End') {
        break;
    }

    if (strpos($line,'-') >= 0) {
//        family tie - person on the left is parent to the person on the right
        [$parentStr, $childStr] = explode('-', $line);
        $parent = null;
        $child = null;

        if (strpos($parentStr, ' ') >= 0) {
            //parentStr is first name last name
            [$parentFirstName, $parentLastName] = explode(' ', $parentStr);

            if (array_key_exists($parentFirstName, $parents)) {
                $parent = $parents[$parentFirstName];
            } else {
                $parent = new ParentPerson();
            }

            $parent->setFirstName($parentFirstName);
            $parent->setLastName($parentLastName);

        } else {
            //parentStr is birth date
        }

        if (strpos($childStr, ' ') >= 0 ) {
            //childStr is first name last name
        } else {
            //childStr is birth date
        }

    } else {
//        person info
    }
}