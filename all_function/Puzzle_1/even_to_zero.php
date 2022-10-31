<?php

//Создать функцию even_to_zero(int $number) Которая цифры на четных ПОЗИЦИЯХ занулит.
//Например, из 12345 получается число 10305. Внимание! Важна позиция цифры, а не значение.

function even_to_zero(int $number): int
{
    return intval(
        implode(
            array_map(
                function ($key, $val) {
                    return $key % 2 ? 0 : $val;
                },
                range(0, strlen($number) - 1),
                str_split($number),
            )
        )
    );
}

assert(even_to_zero(12345) == 10305);