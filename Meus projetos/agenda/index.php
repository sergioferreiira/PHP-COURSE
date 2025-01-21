<?php
include_once("template/header.php");

?>




<body>
 <h1>Minha agenda</h1>

 <div class="container">
   <?php if (count($datas) > 0): ?>
    <table class="table" id="contacts-table">
     <thead>
      <tr>
       <th scope="col">#</th>
       <th scope="col">nome</th>
       <th scope="col">telefone</th>
       <th scope="col"></th>
      </tr>
     </thead>
     <tbody>
      <?php foreach($datas as $data): ?>
       <tr>
        <td scope="row"><?=$data['id'] ?></td>
        <td scope="row"><?=$data['nome'] ?></td>
        <td scope="row"><?=$data['telefone'] ?></td>
        <td>
         <a href="#"><i class="fas fa-eye check-icon"></i></a>
         <a href="#"><i class="fas fa-edit edit-icon"></i></a>
         <button type="submit"><i class="fas fa-times delete-icon"></i></button>
        </td>
       </tr>
       <?php endforeach; ?>
     </tbody>
    </table>

   <?php else: ?>
    <p id="empty-list-text">Ainda não há nenhum contato, <a href="cadastro.php">Clique aqui para adicionar um contato</a>.</p>
   <?php endif ?>
  </div>


 <i class="fas fa-eye"></i>
</body>

</html>