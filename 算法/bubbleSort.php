<?php
function BubbleSort($array)
{
    $len = count($array);
    for ($i = 0; $i < $len - 1; $i++) {
        for ($j = 0; $j < $len - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $tmp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $tmp;
            }
        }
    }
    return $array;
}

$array = [6, 5, 61, 47, 25, 69, 58, 24];
$sort_array = BubbleSort($array);
var_dump($sort_array);