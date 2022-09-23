<?php

namespace My\Abstract;

require __DIR__ . '/../../vendor/autoload.php';

/*
Создать интерфейс Operation с методом calculate. Создать классы имплементирующий этот интерфейс(Plus, Minus, Mult, Div),
каждый класс в конструкторе принимает 2 часла и каждый класс реализует метод calculate по своему.
Создайте класс Calculator устроенный согласно шаблону Fluent interface.

Сделайте так, чтобы код из примера заработал. Допишите своих тестов.
$calculator = new Calculator();
assert(
    $calculator->firstNumber(2)
        ->secondNumber(2)
        ->operation(Mult::class)
        ->result() == 4
);
*/

interface Operation
{
    public function calculate();
}