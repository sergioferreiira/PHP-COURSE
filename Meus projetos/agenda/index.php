<?php
include_once("template/header.php");

?>




<body>
  <h1 id="main-title">Minha agenda</h1>
  <div class="container">
    <?php if (isset($printMsg) && $printMsg != ''): ?>
      <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>
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
          <?php foreach ($datas as $data): ?>
            <tr>
              <td scope="row" class="col-id"><?= $data['id'] ?></td>
              <td scope="row"><?= $data['nome'] ?></td>
              <td scope="row"><?= $data['telefone'] ?></td>
              <td class="actions">
                <a href="show.php?id=<?=$data["id"]?>"><i class="fas fa-eye check-icon"></i></a>
                <a href="#"><i class="fas fa-edit edit-icon"></i></a>
                <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
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