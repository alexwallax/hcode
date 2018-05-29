<?php

    $nome = "Alex wãllace";
    
    //a função strtoupper transforma todas as letras em maiusculas
    $nome = strtoupper($nome);
    
    echo $nome;

    echo '<br />';
   // strtolower converte para minusculas
    $nome = strtolower($nome);
    
    echo $nome;
    
    echo '<br />';
    
    //deixa maiuscula a primaira letra (paragrafo)
    echo ucfirst($nome);
   
    echo '<br />';
    
    //deixa maiuscula a primaira letra de cada palavra (nome completo)
    echo ucwords($nome);
    

    

?>

