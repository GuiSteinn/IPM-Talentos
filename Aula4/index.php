<?php
function montaSelect($array, $nomeCampo, $valorTexto) {
    echo "<select name='$nomeCampo'>"; // Inicia o select
    foreach ($array as $index => $item) {
        $valor = $valorTexto ? $item : $index + 1; // Se $valorTexto for true, usa o próprio item; caso contrário, um número sequencial
        echo "<option value='$valor'>$item</option>"; // Cria cada option
    }
    echo "</select>"; 
}

function montaRadio($array, $nomeCampo, $valorTexto, $selecionado) {
    foreach ($array as $index => $item) {
        $valor = $valorTexto ? $item : $index + 1;
        $checked = ($item == $selecionado) ? 'checked' : ''; // Marca o radio como selecionado
        echo "<label><input type='radio' name='$nomeCampo' value='$valor' $checked> $item</label><br>";
    }
}


function montaCheckBox($array, $nomeCampo, $valorTexto, $selecionado) {
    foreach ($array as $index => $item) {
        $valor = $valorTexto ? $item : $index + 1;
        $checked = in_array($item, $selecionado) ? 'checked' : ''; // Marca os checkboxes selecionados
        echo "<label><input type='checkbox' name='{$nomeCampo}[]' value='$valor' $checked> $item</label><br>";
    }
}
?>
