<?php

$matheu = [
 "nome"=> "Matheus",
 "idade"=> 29,
 "profissao"=> "programador",
];


?>

<table border="1">
 <tr>
  <th>Nome</th>
  <th>Valor</th>
 </tr>
 <?php foreach ($matheu as $key => $value):  ?>
  <tr>
   <td><?= $key;?></td>
   <td><?= $value;?></td>
  </tr>
 <?php endforeach; ?>
</table>