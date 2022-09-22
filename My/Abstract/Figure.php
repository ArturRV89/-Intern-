<?php
namespace My\Abstract;

require __DIR__ . '/../../vendor/autoload.php';

/*
Создать абстрактный класс Figure в пространстве имен My\Abstract с методами вычисления площади и периметра, а также методом,
выводящим информацию о фигуре на экран(Тип, Площадь и периметр).

Создать производные классы в пространстве имен My\Concrete\: Rectangle (прямоугольник), Circle (круг), Triangle (треугольник)
со своими методами вычисления площади и периметра. Создать массив n фигур и вывести полную информацию о фигурах на экран.
*/

abstract class Figure
{
    public $type;
    abstract protected function perimeter(): int;

    abstract protected function area(): int;

    public function information()
    {
        return [
            $this->type,
            $this->area(),
            $this->perimeter()
        ];
    }
}

