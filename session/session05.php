<?php

require_once ("./config.php");

//onde esta salvando
echo session_save_path();

echo '<br />';

//mostra o status
var_dump(session_status());

echo '<br />';

//verificar se a seção esta ativa
switch (session_status()) {
    
    case PHP_SESSION_DISABLED :
    echo "seção desabilitados";   
    break;   
    

    case PHP_SESSION_NONE :
    echo "seção abilitada mas não existe";   
    break;  

    case PHP_SESSION_ACTIVE :
    echo "seção abilitada";   
    break;  
    
    
}

?>
