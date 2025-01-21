<?php

$host = "localhost";
$dbname= "phplearning";
$user = "root";
$password = "";


$conn = new PDO("mysql:host=$host;dbname=$dbname;user=$user;password=$password",$user,$password);

$stmt = $conn->prepare("INSERT INTO itens(nome , descricao) VALUES (:nome , :descricao)");

$nome = "suporte monitor";
$descricao = "O suporte de monitor está novo";

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();