<?php
class User{

    //prima di PHP 8.1
    //------------------
    /*
    private int $id;
    private string $nome;

    public function __construct(int $id, string $nome)
    {
        $this->id = $id;
        $this->nome = $nome;
    }

    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    */

    //da PHP 8.1
    //------------------
    public function __construct(
        public readonly int $id,
        public readonly string $nome
        ){
    }
}

$user = new User(1, 'Lele');
//echo '<br>'. $user->getId() . ' ' . $user->getNome();         //prima di PHP 8.1
echo '<br>'. $user->id. ' ' . $user->nome;                      //dopo di PHP 8.1
//$user->nome = 'Pippo';                                        //geererebbe FATAL ERROR perchè è READONLY, non posso sovrascriverla