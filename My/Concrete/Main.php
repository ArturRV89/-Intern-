<?php

namespace My\Concrete;
require __DIR__ . '/../../vendor/autoload.php';

$allFigures = [
    new Triangle(5, 5, 5),
    new Rectangle(10, 20),
    new Circle(15)
];

foreach ($allFigures as $figure) {
    print_r($figure->getInfoAboutFigure());
}