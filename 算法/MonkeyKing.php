<?php

function monkeyKing($n, $m)
{
    $arr = range(1, $n);
    for ($i = 0; count($arr) > 1; $i++) {
        if (($i + 1) % $m == 0) {
            unset($arr[$i]);
        } else {
            array_push($arr, $arr[$i]);
            unset($arr[$i]);
        }
    }
    return $arr;
}

$king = monkeyKing(10, 4);
var_dump($king);