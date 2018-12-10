<?php

$input_string = readline();
$input_arr = explode(', ', $input_string);

if ((count($input_arr) % 2 === 0) && (count($input_arr) !== 0)) {
    if (!empty($input_arr[0]) && !empty($input_arr[1])) {
        echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        echo '<quiz>'. PHP_EOL;
        while (count($input_arr) > 0) {
            $question = array_shift($input_arr);
            $answer = array_shift($input_arr);

            print_xml($question, $answer);
        }
        echo '</quiz>'. PHP_EOL;
    }
}

function print_xml($question, $answer): void
{
    $question = htmlspecialchars($question, ENT_XML1);
    $answer = htmlspecialchars($answer, ENT_XML1);

    if (!empty($question)) {
        echo '  <question>'. PHP_EOL;
        echo "    $question".PHP_EOL;
        echo '  </question>'. PHP_EOL;
    } else {

    }

    if (!empty($answer)) {
        echo '  <answer>'. PHP_EOL;
        echo "    $answer".PHP_EOL;
        echo '  </answer>'. PHP_EOL;
    }
}
