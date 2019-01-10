<?php

include_once 'FamilyPerson.php';
include_once 'Person.php';

/** @var Person[] $parents */
$parents = [];
$children = [];
$birthDates = [];
$names = [];
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

            if (array_key_exists($parentFirstName, $names)) {
                foreach ($parents as $parentForeach) {
                    if ($parentForeach->getFirstName() === $parentFirstName) {
                        $parent = $parentForeach;
                    }
                }
            } else {
                $parent = new Person();
                $parents[] = $parent;
                $names[$parentFirstName] = $parentLastName;
            }

            $parent->setFirstName($parentFirstName);
            $parent->setLastName($parentLastName);

        } else {
            //parentStr is birth date
            $birthDate = $parentStr;
            if (array_key_exists($birthDate, $birthDates)) {
                foreach ($parents as $parentForeach) {
                    if ($parentForeach->getBirthDate() === $birthDate) {
                        $parent = $parentForeach;
                    }
                }
            } else {
                $parent = new Person();
                $birthDates[$birthDate] = $birthDate;
            }

            $parent->setBirthDate($birthDate);
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

var_dump($parents);