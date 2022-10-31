<?php
//Напишите функцию min_even(array $arr): int, Найдите наименьший четный(по значению) элемент массива.
//В массиве [1, 2, 3, 4] - 2 наименьший четный элемент.

function min_even(array $arr): int
{

    return min(
        array_filter(
        $arr,
        fn($arr) => ($arr % 2 == 0)
    ));
}

$arr = [1, 2, 3, 4];

assert(min_even($arr) == 2);

