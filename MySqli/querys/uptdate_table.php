<?php

$host = 'localhost';
$username = 'root';
$password = '';
$db = 'phplearning';


$conn = new mysqli($host, $username,$password,$db);


if($conn->connect_error){
 echo "Error:  " . $conn->connect_error;
}

$q = "UPDATE itens
      SET nome = 'black lotus' , 
      valor = 495.95
      WHERE nome = 'carta de magic';
      ";

$conn->query($q);
$conn->close();