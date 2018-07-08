<?php

interface Veiculo {
    
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
    
}
//class abstract não pode ser instanciada
abstract class Altomovel implements Veiculo {
    
    public function acelerar($velocidade) {
        echo "O veículo acelerou " . $velocidade . " Km/h";
    }
    public function frenar($velocidade) {
        echo "O veículo frenou até " . $velocidade . " Km/h";
    }   
    
    public function trocarMarcha($marcha) {
        echo "O veículo engatou a marcha " . $marcha;
    }      
}

class Delrey extends Altomovel {
    
    public function empurrar() {
        
    }
    
}

$carro = new Delrey();

$carro->acelerar(200);

?>