<?php

namespace My\Calculations;

require __DIR__ . '/../../vendor/autoload.php';

class Calculator
{
    public $firstNumber;
    public $secondNumber;
    public $result;

    public function firstNumber(int $numb): Calculator
    {
        $this->firstNumber = $numb;
        return $this;
    }

    public function secondNumber(int $numb): Calculator
    {
        $this->secondNumber = $numb;
        return $this;
    }

    public function operation(string $className): Calculator
    {
        $object = new $className ($this->firstNumber, $this->secondNumber);
        $this->result = $object->calculate();

        return $this;
    }

    public function result(): int
    {
        return $this->result;
    }
}

$calculator = new Calculator();

assert(
    $calculator->firstNumber(2)
        ->secondNumber(2)
        ->operation(Mult::class)
        ->result() == 4
);
assert(
    $calculator->firstNumber(3)
        ->secondNumber(3)
        ->operation(Plus::class)
        ->result() != 4
);