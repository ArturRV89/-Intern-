<?php

namespace My\Calculations;

use My\Abstract\Operation;

require __DIR__ . '/../../vendor/autoload.php';

class Plus implements Operation
{
    public $a;
    public $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function calculate()
    {
        return $this->a + $this->b;
    }
}