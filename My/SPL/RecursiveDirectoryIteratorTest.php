<?php

$dir = '../../My';

$files = new RecursiveDirectoryIterator($dir);
$files->rewind();
while ($files->valid()) {
    if (!$files->isDot()) {
        echo 'Имя файла: ' . $files->getSubPathName() . "\n";
        echo 'Поддиректория: ' . $files->getSubPath() . "\n";
    }
    $files->next();
}

//Класс InvalidArgumentException ¶

//Создаётся исключение, если аргумент не соответствует ожидаемому типу.