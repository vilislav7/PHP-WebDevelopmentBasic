<?php

include 'PersonSecond.php';

$name = readline();
$person = new PersonSecond($name);

$person->sayHello();