<?php

$a = 10;

//quando tem o "&" e passagem de parametro por referência
function trocaValor(&$b) {
    
    $b += 50;
    
    return $b;
    
}

echo trocaValor($a);
echo "<br />";
echo trocaValor($a);
echo "<br />";
echo $a;



?>

