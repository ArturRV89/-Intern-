<?php

namespace My\Abstract;
require __DIR__ . '/../../vendor/autoload.php';

trait Getter
{
    public $a = "GG";

    public function __toString(): string
    {
        return $this->a;
    }
}
