<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phplearning";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Error: ". $conn->connect_error;
}

$q = "CREATE TABLE cards (id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,cardname VARCHAR(50),rarity VARCHAR(10),price DECIMAL(10,2))";

$result = $conn->query($q);
$conn->close();