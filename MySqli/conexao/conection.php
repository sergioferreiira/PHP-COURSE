<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phplearning";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Error: ". $conn->connect_error;
}


$query = "CREATE TABLE itens (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(50),
        descricao TEXT,
        valor DECIMAL(10,2)
        );
";

$conn->query($query);


$conn->close();
