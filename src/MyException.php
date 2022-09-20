<?php

/*
Создать класс исключения MyException и функцию mythrow которая бросает исключение.
Написать код, который перехватывает все исключения брошенные функцией mythrow и выводят в случае исключения текст 'exception', иначе выводят 'passed'
Написать функцию customthrow(int $i) которая бросает исключение \Exception если $i меньше 6.
Обязательно написать свою реализацию функции assertException(стандартными средствами языка php), которая будет проверять что вызывается нужное исключение.
*/

/*
class MyException
{
    public function mythrow($x)
    {
        try {
            if (!$x) {
                throw new Exception('exception');
            } else
                print 'passed';
        } catch (Exception $e) {
            print $e->getMessage() . "\n";
        }
    }

    public function customthrow($i)
    {
        try {
            if ($i < 6) {
                throw new \Exception('Значение должно быть больше 6');
            }
        } catch (\Exception $e) {
            print $e->getMessage();
        }
    }
}
$ex = new MyException();
$ex->mythrow(1);
$ex->customthrow(2);
*/



////////////   ВТОРОЕ ЗАДАНИЕ   ////////////



function customthrow($i)
{
    if ($i < 6) {
        throw new \Exception('Значение должно быть больше 6');
    }
}

function assertException(string $className, callable $functionName)
{
    try {
        $functionName();
    } catch (\Throwable $exception){
        assert ($functionName == $exception::class);
    }
}

assertException(
    \Exception::class,
    function () {
        customthrow(7);
    }
);



