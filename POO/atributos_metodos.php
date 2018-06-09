<?php

class Carro{
    
    private $modelo;
    private $motor;
    private $ano;
    
    public function getModelo(){
        
        return $this->modelo;  
    } 
    
    public function setModelo($modelo){
        
        $this->modelo = $modelo;   
    }
    
    public function getMotor(): float{
        
        return $this->motor;
    }
    
    public function setMotor($motor){
        
        $this->motor = $motor;
    }
    
    public function getAno(){
        
        return $this->ano;
    }


// se colocar 0 ":int" o retorno vai ser um inteiro  
// se colocar float vai ser um retorno float
//    public function getAno():int{
//        
//        return $this->ano;
//    }    
    
    
    
    public function setAno($ano){
        
        $this->ano = $ano;
    }
    
    public function exibir(){
        
        return array(
            "modelo"=> $this->getModelo(),
            "motor"=> $this->getMotor(),
            "ano"=> $this->getAno()
        );
    } // fim da function exibir
    
} //fim da classe Carro

//instanciando a classe Carro
$gol = new Carro();
//setando valores (colocando valores)
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2018");

//print_r($gol->exibir());

var_dump($gol->exibir());

?>
