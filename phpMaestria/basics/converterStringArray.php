<?php

$nomes = "carro - aviao - helicoptero - barco - jangada  ";


$novoNomes = explode("-" , $nomes);
print_r(($novoNomes));
echo "<br>";

for($i = 0; $i < count($novoNomes); $i++){
 echo "<br>";
 echo strtoupper($novoNomes[$i]) . "<br> ";
}