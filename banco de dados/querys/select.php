<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "msqliphp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Error: ". $conn->connect_error;
}

$q = "SELECT * FROM cards";

$result = $conn->query($q);
$conn->close();

$item = $result->fetch_assoc();
$itens = $result->fetch_all() ;

print_r($item);





?>


<h1> TODOS ITENS ABAIXO </h1>

<?php 
    foreach($itens as $units) {
        $result = print_r( $units[1] . " <BR>");
        echo"";

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
    <ul>
        <?php foreach($itens as $unit): ?>
            <li><?= print_r( $unit[1])?></li>

        <?php endforeach?>
    </ul>
</body>
</html>