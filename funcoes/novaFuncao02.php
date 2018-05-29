<?php

//este converte o tipo de dado para "string" poderia se "float" ou qi=ualquer outro
function soma(int ...$valores) : string {
    
    return array_sum($valores);
    
}

echo var_dump(soma(2, 2));
echo "<br />";
echo soma(25, 33);
echo "<br />";
echo soma(1.5, 3.2);
echo "<br />";

?>