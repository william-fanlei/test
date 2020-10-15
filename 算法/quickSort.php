<?php
function QuickSort($array)
{
    if (count($array) <= 1) {
        return $array;
    }
    $middle = $array[0];
    $left_array = array();
    $right_array = array();
    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] > $middle) {
            $right_array[] = $array[$i];
        } else {
            $left_array[] = $array[$i];
        }
    }
    $left_array = QuickSort($left_array);
    $left_array[] = $middle;
    $right_array = QuickSort($right_array);
    return array_merge($left_array, $right_array);
}

$array = [6, 5, 61, 47, 25, 69, 58, 24];
$sort_array = QuickSort($array);
var_dump($sort_array);