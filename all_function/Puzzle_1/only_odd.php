<?php

//Написать функцию only_odd, которая принимает массив [1, 2, 3] и возвращает массив только нечетных [1, 3]

function only_odd(array $array): array
{
    $length = count($array);
    for ($i = 0; $i < $length; ++$i)
        if ($array[$i] % 2 === 0) {
            array_splice($array, $i, 1);
            --$length;
            --$i;
        }
    return $array;
}
$array = [1, 2, 3];
$array1 = [1, 3];

assert(only_odd($array) == $array1);