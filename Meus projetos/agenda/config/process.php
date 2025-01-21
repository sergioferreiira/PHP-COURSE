<?php

session_start();
include_once("connection.php");



$id;

if(!empty($_GET)){
 $id = $_GET['id'];
 $stmt = $conn->prepare("SELECT * FROM contatos WHERE id = :id");


$stmt->bindParam(":id", $id);

$stmt->execute();

$result = $stmt->fetch();
}else{
// retorna todos contatos

$query = "SELECT * FROM contatos";

$stmt = $conn->prepare($query);

$stmt->execute();

$datas = $stmt->fetchAll();
}









