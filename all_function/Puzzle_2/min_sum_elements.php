<?php

//Напишите функцию min_sum_elements(array $arr): array, которая возвращает два соседних элемента, сумма которых минимальна.
//В массиве [1, 2, 3, 4] это элементы [1, 2].

function min_sum_elements(array $arr): array
{
    $sum = 0;

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] + $arr[$i - 1] > $sum) {
            $first = $arr[$i - 1];
            $second = $arr[$i];

            return [
                $first, $second
            ];
        }
    }
}

$arr = [1, 2, 3, 4];

assert(min_sum_elements($arr));

