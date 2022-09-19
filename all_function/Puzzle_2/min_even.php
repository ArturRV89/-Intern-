<?php

//Напишите функцию min_even(array $arr): int, Найдите наименьший четный(по значению) элемент массива.
//В массиве [1, 2, 3, 4] - 2 наименьший четный элемент.

function min_even(array $arr) : int
{
    $res = array_filter(
        $arr,
        fn($arr) => ($arr % 2 == 0)
    );

    $res = min($res);
    return $res;
}

$arr = [1, 2, 3, 4];

assert(min_even($arr));

