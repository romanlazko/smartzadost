<?php

function remove_empty_values($array)
{
    foreach ($array as $key => &$value) {
        if (is_array($value)) {
            $value = remove_empty_values($value);
            if (empty($value)) {
                unset($array[$key]);
            }
        } else {
            if (empty($value)) {
                unset($array[$key]);
            }
        }
    }
    return $array;
}

function slice_string($string_chars_count, $string)
{
    $words = explode(' ', str_replace('  ', ' ', $string));

    $chars_string = '';
    $string_obj = [];
    $i = 0;

    foreach ($words as $index => $word) {
        $word_length = strlen($word) + 1;
        if ((strlen($chars_string) + $word_length) < $string_chars_count) {
            $chars_string .= $word . ' ';
        }
        else {
            $chars_string = $word . ' ';
            $i++;
        }
        $string_obj[$i] = $chars_string;
    }
    return collect($string_obj);
}