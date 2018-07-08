<?php

require_once ("./config.php");
require_once ("./class/Sql.php");
require_once ("./class/Usuario.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

$root = new Usuario();

$root->loadById(1);

echo $root;

?>