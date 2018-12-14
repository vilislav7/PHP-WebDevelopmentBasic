<?php

include_once 'Family.php';

$family = new Family();
$count = (int)readline();

for ($i = 0; $i < $count; $i++) {
    $line = readline();
    $user_info = explode(' ', $line);
    $name = $user_info[0];
    $age = (int)$user_info[1];

    $person = new Person($name, $age);

    $family->addMember($person);
}

echo $family->getOldestMember();
