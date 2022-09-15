<?php


//Напишите функцию divisible_by_three(int $max, int $min): array, которая формирует убывающий массив от $max и до $min из чисел,
//которые делятся на 3 без отстатка. В тестах проверьте что первый, последний и любой некрайний элемент списка действительно делятся на 3.
//Например для three_devided_range(1002, 0) вернет массив [1002, 999, ... 0]

function divisible_by_three(int $max, int $min): array
{
    $array = range($min, $max);

    return [
        array_filter($array, function ($arr) {
            return (intval($arr % 3 == 0));
        })
    ];
}

$min = 1;
$max = 1000;

////////////////////TESTS///////////////////////////////

$allElements = divisible_by_three($min, $max);

//выводим первый элемент массива
function first_el_array($allElements)
{
    foreach ($allElements as $lastElement) {
        return array_shift($lastElement);
    }
}

//выводим последний элемент массива
function last_el_array($allElements)
{
    foreach ($allElements as $endElement) {
        return end($endElement);
    }
}

assert(divisible_by_three($min, $max));
assert(first_el_array($allElements) % 3 == 0);
assert(last_el_array($allElements) % 3 === 0);

