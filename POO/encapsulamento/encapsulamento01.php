<?php

class Pessoa {
    
    public $nome = "Pasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";
    
    public function verDados(){
        
        echo $this->nome . "<br />";
        echo $this->idade . "<br />";
        echo $this->senha . "<br />";
        
    }
    
}

$objeto = new Pessoa();

//imprime nome (public)
echo $objeto->nome . "<br />";

//chama o $objeto e chama a function verDados()
$objeto->verDados();


?>

