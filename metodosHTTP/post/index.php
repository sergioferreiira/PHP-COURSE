<?php








?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Cadastro</title>
</head>

<body>
 <br>
 <form action="cadastro.php" method="POST">
  <div>
   <input type="text" name="nomeCarro" id="nomeCarro" placeholder="Nome do carro">
  </div>
  <br>
  <div>
   <input type="text" name="marcaCarro" id="marcaCarro" placeholder="Marca do carro">
  </div>
  <br>
  <div>
   <div>
    <input type="checkbox" name="opcionais[]" value="Teto solar" id="Teto-solar">
    <label for="Teto-solar">Teto solar</label>
   </div>
   <div>
    <input type="checkbox" name="opcionais[]" value="ar" id="ar">
    <label for="ar">ar</label>
   </div>
   <div>
    <input type="checkbox" name="opcionais[]" value="vidro automatico" id="vidro">
    <label for="vidro">vidro automatico</label>
   </div>
   <div>
    <input type="checkbox" name="opcionais[]" value="manual" id="manual">
    <label for="manual">manual</label>
   </div>
  </div>
  <div>
   <input type="submit" value="Enviar">
  </div>

 </form>
</body>

</html>