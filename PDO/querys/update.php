<?php

$host = "localhost";
$dbname= "phplearning";
$user = "root";
$password = "";


$conn = new PDO("mysql:host=$host;dbname=$dbname;user=$user;password=$password",$user,$password);

$stmt = $conn->prepare("UPDATE itens SET nome = :nome , descricao = :descricao , id = :id WHERE id = :id");

$id = 4;
$nome = "Monitor";
$descricao = "O monitor está novo";

$stmt->bindParam(":id", $id);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();