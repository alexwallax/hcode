<?php

class Documento {
    
    private $numero;
    
    public function getNumero(){
        return $this->numero;
    }
    
    public function setNumero($n){
        $this->numero = $n; 
    }
    
}

class CPF extends Documento {
    
    public function validar():bool{
        
        $numero = $this->getNumero();
        
        //validação do CPF
        return true;      
    }
    
}

//Instancia a class CPF
$doc = new CPF();

//coloca um numero de CPF
$doc->setNumero("11122233-11");

//Valida o CPF
var_dump($doc->validar());

echo "<br />";

echo $doc->getNumero();

?>