<?php

$conn = new PDO("mysql:host=localhost;dbname=db_php7", "root", "");

//prepara a query
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id_usuario = :ID");

$id = 3;

//bindparam quer dizer ligar = ligue esse login com esse valor (por ex)
$stmt->bindParam(":ID", $id);

//agora executa
$stmt->execute();

echo "Delete OK!";

?>