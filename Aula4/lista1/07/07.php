<?php
if (isset($_POST["peso"]) && ($_POST["altura"])) {
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $imc = $peso / ($altura * $altura);

    $imc = number_format($imc,2);

    if ($imc > 25) {
        echo "Você está acima do peso seu IMC é: " . $imc;
    } else {
        echo "Você está saudável seu IMC é: " . $imc;
    }
}
?>