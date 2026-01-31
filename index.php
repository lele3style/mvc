<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/myFacade.php';

$msg = 'ciao';
echo $msg;
myFacade::mylog($msg);
