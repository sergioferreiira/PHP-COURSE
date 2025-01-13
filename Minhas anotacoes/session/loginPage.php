<?php
session_start();

// Dados de teste
$nome = "Sergio";
$email = "sergio@gmail.com";
$senha = "12345";

// Validação do formulário
if ($_POST["email"] === $email && $_POST["password"] === $senha) {
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $senha;
    header("Location: dashboard.php");
    exit;
} else {
    echo "<h1>Login ou senha inválida</h1>";
}
?>
