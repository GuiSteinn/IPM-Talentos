<?php

if(isset($_POST["a"]) && ($_POST["b"]) ) {
    $a = $_POST["a"]; 
    $b = $_POST["b"]; 
    $area = ($a * $b);  
    $perimetro = (2*($a * $b)); 

    echo"O perímetro do retangulo é: ".$perimetro." e a área do retangulo é: ".$area;

}

?>