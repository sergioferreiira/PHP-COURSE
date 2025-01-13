<?php


$data = date("d/m/y");
echo"<br>".$data."<br>";

$dataEspecifica = mktime(1,10,59,04 ,20,2000);

$datab = date("d/m/Y", $dataEspecifica);

echo "<br>".$datab."<br>";

$usandoStrToTime = strtotime("24 year");


$datac = date("d/m/Y", $usandoStrToTime);

echo"<br>".$datac."<br>";