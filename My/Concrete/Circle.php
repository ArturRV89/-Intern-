<?php

namespace My\Concrete;
require __DIR__ . '/../../vendor/autoload.php';

use My\Abstract\Figure;

class Circle extends Figure
{
    private $pi = 3.14;
    private $radius;
    public $type = 'circle';

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function perimeter(): int
    {
        return 2 * $this->pi * $this->radius;
    }

    public function area(): int
    {
        return $this->pi * pow($this->radius, 2);
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