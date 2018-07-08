<?php

spl_autoload_register(function($nameClass){
    
    //a pasta onde deve procurar as classes
    $dirClass = "class";
    
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";
    
    if(file_exists($filename)) {
        require_once ($filename);
    }
    
});


?>
