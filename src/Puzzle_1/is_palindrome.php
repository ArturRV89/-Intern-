<?php

//Создать функцию is_palindrome(string $word) которая выведет true если строка является палиндромом
//(читается одинаково в зад и вперед, например: шалаш) и иначе false.
//Внимание! Обязательно включите в проверки русские слова "шалаш" и "такси".

function is_palindrome($string)
{
    $string = iconv('utf-8', 'windows-1251', $string);
    return strtolower($string) == strtolower(strrev($string));
}

assert(is_palindrome('шалаш'));
assert(!is_palindrome('такси'));
