<?php

class Carro
{
 public $cor;
 public $tetoSolar;
 public $velocidadeMaxima;

 function setVelocidadeMaxima($vel){
  $this->velocidadeMaxima = $vel;
 }

 function getVelocidadeMaxima(){
  echo "a velocidade desse carro é : " . $this->velocidadeMaxima . " km/h";
 }
}


$ferrari = new Carro();
$ferrari->cor = "vermelho";
$ferrari->tetoSolar = "possui";
$ferrari->setVelocidadeMaxima(349);



print_r($ferrari);