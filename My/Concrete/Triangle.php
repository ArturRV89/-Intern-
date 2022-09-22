<?php

namespace My\Concrete;
require __DIR__ . '/../../vendor/autoload.php';

use My\Abstract\Figure;


class Triangle extends Figure
{
    private $a;
    private $b;
    private $c;
    public $type = 'triangle';

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function perimeter(): int
    {
        return $this->a + $this->b + $this->c;
    }

    public function area(): int
    {
        $res = $this->perimeter() / 2;

        return sqrt($res * ($res - $this->a) * ($res - $this->b) * ($res - $this->c));
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