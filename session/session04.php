<?php

//recuperar a seção
session_id('mmh7idqmbiga6ioru0eradtnlr');

require_once ("./config.php");

//essa função gera novamente um ID de seção
//obs - ele fica mudando o ID a cada atualização poe ex
session_regenerate_id();

echo session_id();

echo '<br />';

var_dump($_SESSION);

?>
