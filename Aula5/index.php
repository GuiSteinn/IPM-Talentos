<?php
function montaSelect($arrayDados, $nomeCampo, $usarTextoComoValor = true) {
    // Inicia o HTML do select
    $html = "<select name='{$nomeCampo}'>\n";
    
    foreach ($arrayDados as $indice => $valor) {
        // Define o valor do option com base no terceiro parâmetro
        $valorOption = $usarTextoComoValor ? $valor : ($indice + 1);
        $html .= "<option value='{$valorOption}'>{$valor}</option>\n";
    }

    // Finaliza o HTML do select
    $html .= "</select>\n";

    return $html;
}
?>
