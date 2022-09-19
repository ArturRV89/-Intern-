<?php

//Написать функцию array_double, которая принимает на вход массив чисел,
//например [1,2,3] и возвращает массив, в котором все числа умножены на 2, например [2, 4, 6]function array_double ($array)

function array_double($array) : array
{
    return [
        array_map(fn($array): int => $array * 2, $array, range(1, count($array) -1))
    ];
}

$array = [1,2,3];
assert(array_double($array));

