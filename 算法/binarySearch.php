<?php

$array = [6, 5, 61, 47, 25, 69, 58, 24];
sort($array);
$low = 0;
$high = count($array) - 1;
$target = 59;

/**
 * 二分查找
 * @param $array
 * @param $low
 * @param $high
 * @param $target
 * @return bool
 */
function BinarySearch($array, $low, $high, $target)
{
    if ($low <= $high) {
        $mid = intval(($low + $high) / 2);
        if ($array[$mid] == $target) {
            return true;
        } elseif ($array[$mid] < $target) {
            return BinarySearch($array, $mid + 1, $high, $target);
        } else {
            return BinarySearch($array, $low, $mid - 1, $target);
        }
    }
    return false;
}

$find = BinarySearch($array, $low, $high, $target);
var_dump($find);
