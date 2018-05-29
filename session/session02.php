<?php

require_once ("config.php");

//limpa a variavel de seção - obs se colocar sem 'nome' para todas as seções
session_unset($_SESSION['nome']);

echo $_SESSION['nome'];

//este e um outro comando para limpar a variavel de seção
// a diferença e que limpa a variavel de seção e remove o usuário 
session_destroy();

?>

