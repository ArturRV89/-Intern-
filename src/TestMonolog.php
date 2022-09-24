<?php

require __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class TestMonolog
{
    public function doSomething()
    {
        $logger = new Logger('method doSomething');
        $logger->pushHandler(new StreamHandler('tmp/mylog.log', Logger::INFO));
        $logger->info('method did its job!!!');

        print 'hello world';
    }
}

