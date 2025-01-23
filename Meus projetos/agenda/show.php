<?php
include_once("template/header.php");
?>



<div class="container" id="view-contact-container">
 <div id="container-button"> 
  <a href="index.php" id="view-button"> Home</a>
 </div>
 <h1 id="main-title"><?= $result['nome'] ?> </h1>
 <h2 class="view-h2">Telefone:</h2>
 <p><?= $result['telefone'] ?></p>
 <h2 class="view-h2">Observações</h2>
 <?php if ($result['observations'] == NULL): ?>
  <p>Nenhuma observação foi criada Para criar uma observação <a href="index.php">Clique aqui</a>.</p>
 <?php else: ?>
  <p><?= $result['observations'] ?></p>
 <?php endif; ?>
</div>