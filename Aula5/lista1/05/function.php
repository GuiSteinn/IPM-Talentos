<?php
function montaCheckbox2($sNomeCampo, $sIdCheckbox, $sValorCheckbox, $sLabelCheckbox ){
     echo "<input type='checkbox' name='".$sNomeCampo."' value='".$sValorCheckbox."'>
           <label for='".$sValorCheckbox."'>".$sLabelCheckbox."</label>";
}

function montaRadio2($sNomeCampo, $sIdCheckbox, $sValorRadio, $sLabelRadio ){
    echo "<input type='radio' name='".$sNomeCampo."' value='".$sValorRadio."'>
          <label for='".$sValorRadio."'>".$sLabelRadio."</label>";
}
function montasSelect($sNomeCampo, $forma1, $forma2, $forma3){
    echo "<select name='".$sNomeCampo."'>
            <option value='".$forma1."'>".$forma1."</option>
            <option value='".$forma2."'>".$forma2."</option>
            <option value='".$forma3."'>".$forma3."</option>
          </select>";
}
?>