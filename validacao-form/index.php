<?php


$validacoes = [];

if(count($_POST) > 0){
 if($_POST["name"] === ""){
  $validacoes[] = "Digite seu nome";
 }
}
if($_POST["idade"] === ""){
 $validacoes[] = "Digite sua idade";
}

if($_POST["email"] === ""){
 $validacoes[] = "Digite seu e-mail";
}

if($_POST["senha"] != $_POST["confirmacao-senha"]){
 $validacoes[] = "As senhas nao conferem";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <?php if(count($validacoes)):?>
 <ul>
  <?php foreach($validacoes as $validacao ): ?>
  <li><?= $validacao ?></li>
  <?php endforeach;?>
 </ul>
 <?php endif; ?>

 <form action="index.php" method="post">
  <div>
   <input type="text" name="name" placeholder="digite seu nome">
  </div>
  <div>
   <input type="number" name="idade" placeholder="digite sua idade">
  </div>
  <div>
   <input type="text" name="email" placeholder="digite seu e-mail">
  </div>
  <div>
   <input type="password" name="senha" placeholder="digite sua senha">
  </div>
  <div>
   <input type="password" name="confirmacao-senha" placeholder="confirme sua senha">
  </div>
  <input type="submit" value="Enviar">
 </form>
</body>
</html>