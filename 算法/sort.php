<?php

/**
 * 冒泡排序
 * @param $arr
 * @return mixed
 */
function BubbleSort($arr)
{
    $len = count($arr);
    for ($i = 0; $i < $len - 1; $i++) {
        for ($j = 0; $j < $len - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $tmp;
            }
        }
    }
    return $arr;
}

/**
 * 选择排序
 * @param $arr
 * @return mixed
 */
function selectSort($arr)
{
    $len = count($arr);

    for ($i = 0; $i < $len - 1; $i++) {
        $min_index = $i;
        for ($j = $i + 1; $j < $len; $j++) {
            if ($arr[$j] < $arr[$min_index]) {
                $min_index = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$min_index];
        $arr[$min_index] = $temp;
    }
    return $arr;
}

/**
 * 快速排序
 * @param $arr
 * @return array
 */
function QuickSort($arr)
{
    $len = count($arr);
    if ($len <= 1) {
        return $arr;
    }
    $right_array = array();
    $left_array = array();
    $middle = $arr[0];
    for ($i = 1; $i < $len; $i++) {
        if ($arr[$i] > $middle) {
            $right_array[] = $arr[$i];
        } else {
            $left_array[] = $arr[$i];
        }
    }
    $left_array = QuickSort($left_array);
    $left_array[] = $middle;
    $right_array = QuickSort($right_array);
    return array_merge($left_array, $right_array);
}

$arr = [6, 5, 61, 47, 25, 69, 58, 24];
//$sort_array = QuickSort($arr);
//$sort_array = BubbleSort($arr);
$sort_array = selectSort($arr);
var_dump($sort_array);