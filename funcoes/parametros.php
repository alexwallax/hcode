<?php

//se colocar = "mundo" por ex vai aparecer sempre mundo 
//a não ser que coloque alguma coisa como "Alex" ou "Rosiane"
//la na chamada se colocar ("") vazio não vai aparecer nada
//obs - se não colocar um valor como padrão, na chamada é obrigatorio informar o valor
function ola($texto = "mundo", $periodo = "Bom dia"){
    
    return "Olá $texto! $periodo! <br />";
    
}

echo ola();
echo ola("", "Boa noite!");
echo ola("Alex", "Boa tarde!");
echo ola("Rosiane", "");

?>

