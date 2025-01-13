<?php

 if(isset($_FILES)){
  print_r($_POST);
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

 <form action="index.php" method="POST">
  <div>
   <input type="file" name="image">
  </div>
  <input type="submit" value="Enviar">

 </form>

</body>

</html>