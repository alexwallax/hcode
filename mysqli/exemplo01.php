<?php

//se fosse na nuvem o primeiro parametro seria o endereço ou o IP do servidor
//2º parametro é o usuário
//3º parametro é a senha
//4º parametro é o banco de dados
$conn = new mysqli('localhost', 'root', '', 'db_php7');

//verficando se deu algum erro na conexão
if($conn->connect_error) {
    echo "<br />";
    echo "<br />";
    echo "Error: " . $conn->connect_error;  
}

//as proximas tres linhas de codigos estão mandando dados para o banco de dados
$stmt = $conn->prepare("INSERT INTO tb_usuarios (des_login, des_senha) VALUES(?, ?)");

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->execute();

$login = "root";
$pass = "321";
  
$stmt->execute();

?>