<?php
include_once("config/connection.php");
include_once("config/process.php");


// limpa a mensagem

// if (isset($_SESSION["msg"])) {
//  $printMsg = $_SESSION['msg'];
//  $_SESSION['msg'] = '';
// }


?>


<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- BOOTSTRAP -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <!-- FONT AWESOME -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!-- CSS -->
 <link rel="stylesheet" href="css/styles.css">

 <title>Agenda</title>
</head>

<header>
 <nav id="headerId">
  <a href="index.php"><img src="img/logo.svg" alt="Logo da agenda" id="imgLogo"></a>
  <div>
   <a href="index.php">Agenda</a>
   <a href="cadastro.php">Adicionar contato</a>
  </div>
 </nav>


</header>