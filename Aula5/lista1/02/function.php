<?php

$frutas = Array("Banana", "Maçã", "Abacaxi", "Tomate", "Morango", "Pastel", "Limão", "Abacate", "Melão");

function montaSelect($aFrutas,$sNomeCampo, $bUtilizaTextoValue){
    echo "<select name='".$sNomeCampo."'>";
    foreach ($aFrutas as $chave => $valor) {
        if ($bUtilizaTextoValue === true){
            echo "<option value='".$valor."'>".$valor."</option>";
        } else {
            echo "<option value='".$chave."'>".$valor."</option>";
        }
    } 
    echo "</select>";
}

?>

