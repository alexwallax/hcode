<?php

require_once ("./config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Alex Wallace");
$cad->setEmail("alex@hotmail.com.br");
$cad->setSenha("123456");

$cad->registrarVenda();

?>