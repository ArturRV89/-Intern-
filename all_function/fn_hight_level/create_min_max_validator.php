<?php

//Написать функцию create_min_max_validator(int $min, int $max), которая возвращает функцию принимающую один аргумент,
// функция проверяет входит ли аргумент в диапазон от $min до $max включительно.

function create_min_max_validator(int $min, int $max)
{
    $arr = range($min, $max);
    return function ($num) use ($arr) {
        return in_array($num, $arr);
    };
}

$validator = create_min_max_validator(1, 200);
$validator(10);

assert(($validator(201)));















//$validator = create_min_max_validator(2, 5);

//assert($validator(3));
//assert(!$validator(6));
