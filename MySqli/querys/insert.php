<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phplearning";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Error: ". $conn->connect_error;
}


$q = "INSERT INTO itens (nome , descricao, valor) 
    VALUES ('abajur', 'abajur comprado em venda de garagem', 14.95),
    ('relogio', 'relogio de bolso de 5 anos', 69.95),
    ('carta de magic', 'carta de colecionador black lotus' , 999.99);
    ";

$conn->query($q);

$conn->close();
