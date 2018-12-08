<?php

$str = readline();

if (strpos($str, ' ') !== false) {
    /** str = []*/
    $str_arr = explode(' ', $str);
    $res = '';
    foreach ($str_arr as $current_str) {
        $res.=repeat_string_by_its_length($current_str);
    }
    echo $res;
} else {
    /** str = string */
    echo repeat_string_by_its_length($str);
}

function repeat_string_by_its_length ($str) {
    $result = '';
    $str_length = strlen($str);

    for ($i = 0; $i < $str_length; $i++) {
        $result.=$str;
    }
    return $result;
}