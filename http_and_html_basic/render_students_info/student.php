<?php

$students = [];

if (isset($_GET['filter'])) {
    $delimiter = $_GET['delimiter'];
    $names = $_GET['names'];
    $ages = $_GET['ages'];

    $names = explode($delimiter, $names);
    $ages = explode($delimiter, $ages);

    $count = count($names);

    for ($i = 0; $i<$count; $i++) {
        $students[$ages[$i]] = $names[$i];
    }
}

include 'student_frontend.php';