<?php
function montaSelect($array, $nomeCampo, $valorTexto) {
    echo "<select name='$nomeCampo'>";
    foreach ($array as $index => $item) {
        $valor = $valorTexto ? $item : $index + 1; 
        echo "<option value='$valor'>$item</option>"; 
    }
    echo "</select>"; 
}

function montaRadio($array, $nomeCampo, $valorTexto, $selecionado) {
    foreach ($array as $index => $item) {
        $valor = $valorTexto ? $item : $index + 1;
        $checked = ($item == $selecionado) ? 'checked' : ''; 
        echo "<label><input type='radio' name='$nomeCampo' value='$valor' $checked> $item</label><br>";
    }
}


function montaCheckBox($array, $nomeCampo, $valorTexto, $selecionado) {
    foreach ($array as $index => $item) {
        $valor = $valorTexto ? $item : $index + 1;
        $checked = in_array($item, $selecionado) ? 'checked' : ''; 
        echo "<label><input type='checkbox' name='{$nomeCampo}[]' value='$valor' $checked> $item</label><br>";
    }
}
?>
