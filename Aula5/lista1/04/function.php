<?php
$tiposDeInput = Array("button", "checkbox", "color", "date", "datetime-local", "email", "file", "hidden", "image", "month", "number", "password", "radio", "range", "reset", "search", "submit", "tel", "text", "time", "url", "week");

function montaInput($aTipoInput){
    foreach ($aTipoInput as $chave => $valor) {
        echo "".$chave." - <label for='".$valor."'>Tipo do input: ".$valor."</label>
              <input type='".$valor."' name='".$valor."' id='".$valor."'>";
        echo "<br>";
    }
}

function montaInput2($sNomeInput ,$sTipoInput, $sIdInput, $sLabelInput, $iMinimoCaracter = false, $iMaximoCaracter = false){
        if ($iMinimoCaracter !== false){
            $sMinimo = "min='$iMinimoCaracter'";
        }else{
            $sMinimo = "";
        }
        if ($iMaximoCaracter !== false){
            $sMaximo = "max='$iMaximoCaracter' maxlength='$iMaximoCaracter'";
        }else{
            $sMaximo = "";
        }
        echo "<label for='".$sNomeInput."' id='".$sIdInput."'>".$sLabelInput."</label>
              <input type='".$sTipoInput."' name='".$sNomeInput."' id='".$sIdInput."' $sMinimo $sMaximo>";
}

?>