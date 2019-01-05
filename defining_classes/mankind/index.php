<?php

include_once 'Human.php';
include_once 'Student.php';
include_once 'Worker.php';

$studentInfo = explode(' ', readline());
$workerInfo = explode(' ', readline());

[$studentFname, $studentLname, $studentFaculty] = $studentInfo;
[$workerFname, $workerLname, $workerWeekSalary, $workerWorkHoursDay] = $workerInfo;

try {
    $student = new Student($studentFname, $studentLname, $studentFaculty);
    $worker = new Worker($workerFname, $workerLname, $workerWeekSalary, $workerWorkHoursDay);

    echo $student->__toString() . PHP_EOL;
    echo $worker;
} catch (Exception $exception) {
    echo $exception->getMessage();
}