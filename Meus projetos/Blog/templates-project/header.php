<?php

include_once("data/categories.php");
include_once("data/posts.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="css/style.css">
 <title>Blog</title>
</head>


<body>
 <header>
  <a href="index.php" id="logo">
   <img src="img/logo.svg" alt="blog codar">
  </a>
  <nav>
   <ul id="navbar">
    <li><a href="index.php" class="nav-link">Home</a></li>
    <li><a href="categorias.php" class="nav-link">categorias</a></li>
    <li><a href="sobre.php" class="nav-link">sobre</a></li>
    <li><a href="contato.php" class="nav-link">Contato</a></li>


   </ul>
  </nav>
 </header>