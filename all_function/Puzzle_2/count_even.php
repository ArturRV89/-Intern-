<?php

//Напишите функцию count_even(array $arr): int, которая считает количество четных чисел в массиве.
//В массиве [1, 2, 3] - только 1 четный элемент.

function count_even(array $arr) : int
{
    $res = array_filter($arr, fn($a) => ($a % 2 == 0));
    $res = count($res);
    return $res;
}

$arr = [1, 2, 3];

assert(count_even($arr));
