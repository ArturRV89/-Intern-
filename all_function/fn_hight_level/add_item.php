<?php

//Написать функцию add_item($arr, $item), которая ничего не возвращает, но при этом добавляет в конец массива $arr элемент $item

$arr = [1, 2, 3, 4, 5];
$item = 5;
function add_item(array &$arr, $item): void
{
    $arr [] = $item;
}

add_item($arr, $item);
add_item($arr,52);
add_item($arr,64);
add_item($arr,123);

assert(in_array($item,$arr));
assert(in_array(52,$arr));
assert(in_array(64,$arr));
assert(in_array(123,$arr));




