<?php

$frase = "A repetição é mãe da repetição.";

$palavra = "mãe";

//strpos - procura por palavra
//1º parametro qual a variavel - no caso $frase
//2º parametro qual palavra no no caso "mãe"
//esse codigo retorna um indice
$q = strpos($frase, $palavra);

//este codigo vai pegar apenas o início da frase string(17)"A repetição é" 
//que vai de zero ate 17
$texto = substr($frase, 0, $q);

//a resposta é int(19) - pq ele conta os caracteres ate chegar a "mãe"
//var_dump($q);
        
//este var_dump - vai imprimir string(17)"A repetição é" 
var_dump($texto);

//começa apartir de mãe ate o final
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

//vai mostrar apartir da palavra mãe
var_dump($texto2);

?>
