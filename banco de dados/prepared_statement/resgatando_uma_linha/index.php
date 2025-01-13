<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "msqliphp";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
 echo "Error: ". $conn->connect_error;
}

$id = 6;


$stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");

$stmt->bind_param("i" $id);

$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_row();