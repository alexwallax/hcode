<?php

$nome = "Alex";

function teste() {
    
    //global chama a variavel que esta fora da função teste
    global $nome;
    
    echo $nome;
    
    echo '<br/>';
}

function teste2() {
    
    $nome = "wallace";
    
    echo $nome." agora no teste2";    
}

//chamando a função teste()
teste();

//chamando a função teste2()
teste2()

?>
