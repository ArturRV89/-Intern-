<?php

//Написать функцию only_odd, которая принимает массив [1, 2, 3] и возвращает массив только нечетных [1, 3]

function only_odd ($array)
{
    return array(array_filter($array, function($x) { return $x % 2 != 0;}));
}
$array = [1,2,3,4,5,6,7,8,9];

assert(only_odd($array));