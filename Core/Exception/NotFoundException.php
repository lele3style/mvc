<?php
namespace Emmanuele\MVC\Core\Exception;

class NotFoundException{

    public function __construct()
    {
        echo "Ciao dalla classe " . __CLASS__;
    }
}