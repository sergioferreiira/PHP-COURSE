<?php

session_start();
include_once("connection.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $nomeContato = $_POST['nomeContato'];
 $telefoneContato = $_POST['telefoneContato'];
 $observationsContato = $_POST["observacoesContato"];
}


$stmt = $conn->prepare("INSERT INTO contatos (nome, telefone, observations) VALUES (:nome, :telefone, :observations);");


$stmt->bindParam(":nome", $nomeContato);
$stmt->bindParam(":telefone", $telefoneContato);
$stmt->bindParam(":observations", $observationsContato);


if ($stmt->execute()) {
 $_SESSION["msg"] = "Cadastro realizado com sucesso!";
} else {
 echo "Erro ao inserir contato: " . implode(", ", $stmt->errorInfo());
}

    // Redireciona para a página index.php
header("Location: ../index.php");

?>