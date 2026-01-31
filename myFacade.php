<?php
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class myFacade{
    public static function mylog(string $msg, string $path = 'tmp/log.log'){
        // create a log channel
        $log = new Logger($msg);
        $log->pushHandler(new StreamHandler($path, Level::Warning));

        // add records to the log
        $log->warning('Foo');
        $log->error('Bar');
    }
}