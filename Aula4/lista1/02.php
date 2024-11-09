<?php 

$valor1 = 1; 
$valor2 = 9;

if ($valor1 < $valor2) {
    for ($i = $valor1; $i < $valor2; $i++){
        echo $i;
    }
     
} else{
    for ($i = $valor2; $i < $valor1; $i++){
        echo $i;
    }
}

?>