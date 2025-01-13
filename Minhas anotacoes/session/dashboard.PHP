<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION["email"])) {
    header("Location: index.php");
    exit;
}

$nome = $_SESSION["nome"];
$email = $_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Dashboard</title>
</head>
<body>
 <h1>Olá, <?= htmlspecialchars($nome) ?>!</h1>
 <p>Você está logado com o email: <?= htmlspecialchars($email) ?></p>
 <a href="logout.php">Sair</a>
</body>
</html>
