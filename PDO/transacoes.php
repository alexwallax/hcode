<?php

$conn = new PDO("mysql:host=localhost;dbname=db_php7", "root", "");

$conn->beginTransaction();

//prepara a query
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id_usuario = ?");

$id = 2;

//bindparam quer dizer ligar = ligue esse login com esse valor (por ex)
$stmt->bindParam(":ID", $id);

//agora executa
$stmt->execute(array($id));

//rollback cancela a transação se der errado
//$conn->rollBack();

//commit confirma a transação se der certo
$conn->commit();

echo "Delete OK!";

?>