<?php

require_once __DIR__ . '/vendor/autoload.php';
echo '<h1>Autoload</h1>';

use \Emmanuele\MVC\Core\Controller;
use \Emmanuele\MVC\Core\Model;
use \Emmanuele\MVC\Core\Exception\NotFoundException;

echo '<br>';
new Controller;
echo '<br>';
new Model;
echo '<br>';
new NotFoundException;