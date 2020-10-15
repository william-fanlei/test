<?php
function SelectSort($array)
{
    $len = count($array);
    for ($i = 0; $i < $len - 1; $i++) {
        $min_index = $i;
        for ($j = $i + 1; $j < $len; $j++) {
            if ($array[$j] < $array[$min_index]) {
                $min_index = $j;
            }
        }
        $temp = $array[$i];
        $array[$i] = $array[$min_index];
        $array[$min_index] = $temp;
    }
    return $array;
}

$array = [6, 5, 61, 47, 25, 69, 58, 24];
$sort_array = SelectSort($array);
var_dump($sort_array);