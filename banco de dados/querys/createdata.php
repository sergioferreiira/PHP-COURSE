<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "cursophp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Error: ". $conn->connect_error;
}

$q = "CREATE DATABASE msqliphp";

$result = $conn->query($q);

$conn->close();