<?php
//Напишите функцию count_even(array $arr): int, которая считает количество четных чисел в массиве.
//В массиве [1, 2, 3] - только 1 четный элемент.

function count_even(array $arr): int
{
    return (
        count(array_filter($arr, fn($a) => $a % 2 == 0))
    );
}
$arr = [1, 2, 3];

assert(count_even($arr) == 1);