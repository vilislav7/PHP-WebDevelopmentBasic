<?php

//$length =(int)readline();
$length =10;
$stars_count = 2;
$stars_count_times = 0;
$stars_operation_divide = true;

$letters_arr = ['A','T','C','G','T','T','A','G','G','G'];
$letter_printer_called_times = 0;

$line_count = 0;
$line_count_times = 0;
$line_count_sum = true;

for ($i = 0; $i < $length; $i ++) {
    $currentLetter = $letters_arr[$letter_printer_called_times];
    $nextLetter = $letters_arr[$letter_printer_called_times + 1];

    printRow($stars_count, $currentLetter, $nextLetter, $line_count);

    $stars_count = starsCountGenerator($stars_operation_divide, $stars_count);
    $line_count = lineCountGenerator($line_count_sum, $line_count);

    $letter_printer_called_times+=2;
    $stars_count_times ++;
    $line_count_times ++;
    if ($stars_count_times === 2) {
        $stars_count_times = 0;
        $stars_operation_divide = !$stars_operation_divide;
    }
    if ($line_count_times === 2) {
        $line_count_times = 0;
        $line_count_sum = !$line_count_sum;
    }
    if ($letter_printer_called_times === count($letters_arr)) {
        $letter_printer_called_times = 0;
    }
    echo PHP_EOL;
}

function starsCountGenerator(string $operation_divide, int $count) :int {
    if ($operation_divide) {
        return $count - 1;
    } else {
        return $count + 1;
    }
}

function lineCountGenerator(string $operation_sum, int $count) :int {
    if ($operation_sum) {
        return $count + 2;
    } else {
        return $count - 2;
    }
}

function printRow (int $stars_count, string $letter, string $nextLetter, int $line_count) {
    printStars($stars_count);
    printLetter($letter);
    printLine($line_count);
    printLetter($nextLetter);
    printStars($stars_count);

}

function printStars(int $count) {
    for ($i = 0; $i<$count; $i++) {
        echo '*';
    }
}
function printLetter(string $letter) {
    echo $letter;
}
function printLine(int $count) {
    for ($i = 0; $i<$count; $i++) {
        echo '-';
    }
}