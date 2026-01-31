<?php
namespace Emmanuele\MVC\Core;

class Controller{

    // public function __construct()
    // {
    //     echo "Ciao dalla classe " . __CLASS__;
    // }
    public function __construct(public string $root) {}

    public function home(){
        include $this->root."/views/home.htm";
    }

    public function contatti(){
        include $this->root."/views/contatti.htm";
    }

    public function _404(){
        include $this->root."/views/404.htm";
    }
}