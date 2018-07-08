<?php

$conn = new PDO("mysql:host=localhost;dbname=db_php7", "root", "");

//prepara a query
$stmt = $conn->prepare("UPDATE tb_usuarios SET des_login = :LOGIN, des_senha = :PASSWORD WHERE id_usuario = :ID");

$login = "joão";
$password = "aaa";
$id = 2;

//bindparam quer dizer ligar = ligue esse login com esse valor (por ex)
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

//agora executa
$stmt->execute();

echo "Alterado OK!";

?>

