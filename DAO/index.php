<?php

require_once ("./config.php");
require_once ("./class/Sql.php");
require_once ("./class/Usuario.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//carrega apenas um usuário
//$root = new Usuario();
//$root->loadById(1);
//echo $root;


//carrega uma lista de usuários
//obs como o metodo e static não precisa instanciar apenas coloca os :: para chamar
//$lista = Usuario::getList();
//echo json_encode($lista);


//carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("Jo");
//echo json_encode($search);


//carrega um usuário usando um login e a senha
$usuario = new Usuario();
$usuario->login("root", "123");

echo $usuario;



?>