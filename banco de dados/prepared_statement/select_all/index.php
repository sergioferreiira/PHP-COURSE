<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "msqliphp";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
 echo "Error: " . $conn->connect_error;
}

$id = 4;

// prepara a query
$stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");

// formata com bind param e mostra o tipo
$stmt->bind_param("i", $id);
// executa a query
$stmt->execute();
// pega o resultado da query executada
$result = $stmt->get_result();
// passamos o resultado da query para outra variavel para dar um fetch all e mostrar tudo no prin_r ou outro
$data = $result->fetch_all();
