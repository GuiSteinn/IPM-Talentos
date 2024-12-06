<?php
$frutas = Array("Banana", "Maçã", "Abacaxi", "Tomate", "Morango", "Pastel", "Limão",
"Abacate", "Melão");
function montaRadio($aFrutas, $sNomeCampo, $bUtilizaTextoValue, $sOpcaoCheck){
    foreach ($aFrutas as $chave => $valor) {
        if ($bUtilizaTextoValue === true){
            if ($sOpcaoCheck == $valor) {
                echo "<input type='radio' name='".$sNomeCampo."' value='".$valor."' checked>
                      <label for='".$valor."'>".$valor."</label>";
            }else{
                echo "<input type='radio' name='".$sNomeCampo."' value='".$valor."'>
                      <label for='".$valor."'>".$valor."</label>";
            }
        } else {
            echo "<input type='radio' name='".$sNomeCampo."' value='".$chave."'>
                  <label for='".$chave."'>".$valor."</label>";
        }
    }

}

function montaCheckbox($aFrutas, $sNomeCampo, $bUtilizaTextoValue, $sOpcaoCheck){
    foreach ($aFrutas as $chave => $valor) {
        if ($bUtilizaTextoValue === true){
            if ($sOpcaoCheck == $valor) {
                echo "<input type='checkbox' name='".$sNomeCampo."' value='".$valor."' checked>
                      <label for='".$valor."'>".$valor."</label>";
            }else{
                echo "<input type='checkbox' name='".$sNomeCampo."' value='".$valor."'>
                      <label for='".$valor."'>".$valor."</label>";
            }
        } else {
            echo "<input type='checkbox' name='".$sNomeCampo."' value='".$chave."'>
                  <label for='".$chave."'>".$valor."</label>";
        }
    }

}

?>
