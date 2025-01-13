<?php



if (isset($_GET["email"]) && isset($_GET["password"])) {
    $email = $_GET["email"];
    $password = $_GET["password"];
}else{
 $email = "Padrao";
 $password = "Padrao"; 
}



?>

<h1>Você logou com o email: <?= htmlspecialchars($email) ?></h1>
<h1>Você logou com a senha: <?= htmlspecialchars($password) ?></h1>
