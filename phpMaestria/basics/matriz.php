<?php

$matriz =[
 [],
 [],
 []
];

for ($i = 0; $i < 3; $i++) {
 for ($j = 0; $j <= $i ; $j++) {
  $matriz[$i][$j] = "*";
 }
}


print_r($matriz );

// [0] => Array ( [0] => * ) 
// [1] => Array ( [0] => * [1] => * ) 
// [2] => Array ( [0] => * [1] => * [2] => * ) )