<?php

class Pessoa {
    
    public $nome;//atributo
    
    public function falar() { //método
        
        return "O meu nome é " .$this->nome;
        
    }
    
}

$alex = new Pessoa();
$alex->nome = "Alex Wallace";
echo $alex->falar();

?>
