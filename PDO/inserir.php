<?php

$conn = new PDO("mysql:host=localhost;dbname=db_php7", "root", "");

//prepara a query
$stmt = $conn->prepare("INSERT INTO tb_usuarios (des_login, des_senha) VALUES(:LOGIN, :PASSWORD)");

$login = "jose";
$password = "123";

//bindparam quer dizer ligar = ligue esse login com esse valor (por ex)
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

//agora executa
$stmt->execute();

echo "Inserido OK!";

?>
