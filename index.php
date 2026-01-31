<?php

use Emmanuele\MVC\Core\Controller;
use Emmanuele\MVC\Core\Router;

require_once __DIR__ . '/vendor/autoload.php';
/*
SOC - Separation Of Concept (separazione dei compiti)

Model       - recupero/maipolazione dei dati
View        - presentazione
Controller  - invoca il Model e li passa alla Vista

risponde ora alle url:
 - /
 - /contatti
 - /qualunque altra va alla 404
*/


$controller = new Controller(__DIR__);
$router = new Router($controller,'');
$router->resolve();