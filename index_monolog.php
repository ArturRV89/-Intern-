<?php

require __DIR__ . '/vendor/autoload.php';

//Инициализировать проект composer, сгенерировать автолоадер который через require подключить в файле index.php и создать объект класса Test
//
//Подключить библиотеку monolog/monolog и при помощи неё логировать каждый вызов метода в файл /tmp/mylog.log

$monolog = new TestMonolog();
$monolog->doSomething();


