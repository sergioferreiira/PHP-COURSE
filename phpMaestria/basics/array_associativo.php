
<!-- Exercicio de array associativo -->

<?php

$cars = [
    "Fusca" => 25000,
    "motor" => 500,
    "vidro" => 50,
    "macaneta" => 5,
    "luz" => 25
];


function valorAcimaDeDez($array){

    $itensAcimaDoPreco = [];

    foreach($array as $peca => $item){
        if($item > 10){
            echo "Produto: " . $peca . " <br> valor:" . $item . "<br>"."<br>";
            array_push($itensAcimaDoPreco, $peca);
        }
    }
    print_r($itensAcimaDoPreco);
}

valorAcimaDeDez($cars);


