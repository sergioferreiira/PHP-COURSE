<?php

session_start();
include_once("connection.php");


$query = "SELECT * FROM contatos";

$stmt = $conn->prepare($query);

$stmt->execute();

$datas = $stmt->fetchAll();

