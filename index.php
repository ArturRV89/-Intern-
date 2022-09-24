<?php

declare(strict_types=1);

//Создать файл index.php и директорию classes в которой создать файлы Test1.php и  Test2.php.
//В каждом файле разместить одноименный класс с методом do().
//В файле index.php написать функцию автолоадер и не используя require и include создать экземпляры каждого из классов и запустить метод do()



//автозагрузчик должен ориентироваться на базовый каталог и подключать файлы относительно него.
//define('LIB_DIR', __DIR__ . '    ');
//
//spl_autoload_register(function ($class) {
//
//    $expl = explode('\\', $class);
//    $lastEl = array_pop($expl);
////    $path = LIB_DIR . $class . '/' . $lastEl . '.php';
//    $path = $class . '/' . $lastEl . '.php';
//    $res = str_replace('\\', '/', $path);
//    if (file_exists($res)) require_once $res;
//});
//
//$test1 = new classes\Test1();
//$test2 = new classes\Test2();
//
//$test1->do();
//$test2->do();


/////////// ВТОРОЕ ЗАДАНИЕ ///////////
/// необходимо закоментировать предыдущее задание ///


//Создать файл index.php и директорию src в которой размещать классы соответственно стандарту автозагрузки PSR-4,
//в каждом классе должен быть метод do. Автозагрузчик сгенерировать при помощи composer.
//В файле index.php добавить use для таких классов One\Test, Two\Test, Three\Four\Test создать экземпляры всех классов и вызвать для них метод do,
//чтобы не было конфликта имен использовать псевдонимы Test1, Test2, Test3 соответственно.


/*
require __DIR__ . '/vendor/autoload.php';

use One\Test;
use Two\Test as Test2;
use Three\Four\Test as Test3;

$test = new Test();
$test->do();

$test1 = new Test2();
$test1->do();

$test1 = new Test3();
$test1->do();
*/



/////////// ТРЕТЬЕ ЗАДАНИЕ ///////////
/// необходимо закоментировать предыдущее задание ///


