<?php
namespace Emmanuele\MVC\Core;

class Router{
    public function __construct(
        public Controller $controller,                  //riceve un'istanza del controller
        public string $prefix
    )
    {
        
    }


    public function resolve(){
        if ($_SERVER['REQUEST_URI'] === $this->prefix.'/'){
            call_user_func([$this->controller, 'home']);
        }else if ($_SERVER['REQUEST_URI'] === $this->prefix.'/contatti'){
            call_user_func([$this->controller, 'contatti']);
        }else{
            call_user_func([$this->controller, '_404']);
        }
    }
}