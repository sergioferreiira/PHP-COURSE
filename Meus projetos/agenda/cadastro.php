<?php
include_once("template/header.php");

?>

<body>
 <div class="container" id="register-container">
  <div id="container-button">
   <a href="index.php" id="view-button"> Home</a>
  </div>
  <h1 id="main-title">Criar contato</h1>

  <form action="config/register.php" method="post">
   <p>Nome do contato:</p>
   <input type="text" name="nomeContato" id="nome-contato" required>
   <p>Telefone do contato:</p>
   <input type="text" name="telefoneContato" id="nome-contato" required>
   <p>Observações:</p>
   <textarea name="observacoesContato" id="observacoes-contato"></textarea>
   <div>
    <button type="submit">Cadastrar</button>
   </div>

  </form>
 </div>
</body>