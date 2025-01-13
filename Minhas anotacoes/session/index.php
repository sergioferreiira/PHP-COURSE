<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <form action="loginPage.php" method="POST">
  <div>
   <input type="email" name="email" id="" placeholder="Digite seu email">
   <br>
   <input type="password" name="password" id="" placeholder="Digite sua senha">
  </div>
  <input type="submit" value="Enviar">

 
 </form>
</body>

</html>