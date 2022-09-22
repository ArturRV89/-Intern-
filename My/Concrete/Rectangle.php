<?php

namespace My\Concrete;
require __DIR__ . '/../../vendor/autoload.php';

use My\Abstract\Figure;

class Rectangle extends Figure
{
    private $a;
    private $b;
    public $type = 'rectangle';

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function perimeter(): int
    {
        return ($this->a + $this->b) * 2;
    }

    public function area(): int
    {
        return $this->a * $this->b;
    }

    public function getInfoAboutFigure()
    {
        return [
            'type' => $this->type,
            'perimeter ' => $this->perimeter(),
            'area ' => $this->area()
        ];
    }
}