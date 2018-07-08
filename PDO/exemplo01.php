<?php

//Conexão com o banco de dados utilizando o PDO
//1º parametro o tipo de banco "mysql" e o nome do banco "db_php7"
//2º parametro é onde o banco esta no caso aqui "localhost"
//3º parametro é o login "root" e a senha "" do banco de dados 
$conn = new PDO("mysql:dbname=db_php7;host=localhost", "root", "");

//consulta no banco de dados
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY des_login");

//para mandar para o banco de dados
$stmt->execute();

//busca todos os resultados
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    foreach ($row as $key => $value) {
        echo "<strong>".$key.": </strong>".$value."<br />";
    } 
    echo "==============================<br />";
}



?>
