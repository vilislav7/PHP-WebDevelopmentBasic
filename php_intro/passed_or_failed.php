<?php

$grade = (double)readline('grade: ');

if ($grade < 3) {
    echo 'Failed!';
} else {
    echo 'Passed!';
}