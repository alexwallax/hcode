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

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY des_login");

//enquanto estiver resultado armazena na variavel $row

$data = array();

while ($row = $result->fetch_array()) {
 
    array_push($data, $row);
}

echo json_encode($data);

?>