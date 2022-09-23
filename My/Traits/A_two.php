<?php

namespace My\Traits;
require __DIR__ . '/../../vendor/autoload.php';

//Почините тест написал код вместо троеточия, не используйте __construct()

class A_two
{
    private string $a = "gg";

    public function __toString(): string
    {
        return strtoupper($this->a);
    }
}

assert(
    "GG" == (new A)->a
);
