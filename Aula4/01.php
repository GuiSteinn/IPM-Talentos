<?php
include 'index.php';

$frutas = ["Banana", "Maçã", "Abacaxi", "Tomate", "Morango", "Pastel", "Limão", "Abacate", "Melão"];

echo "Selecione uma fruta:<br>";
montaSelect($frutas, "fruta_select", true); // O valor será o próprio nome da fruta

echo "<br>Selecione sua fruta favorita:<br>";
montaRadio($frutas, "fruta_radio", true, "Banana"); // "Banana" será o selecionado por padrão

echo "<br>Escolha suas frutas favoritas:<br>";
$selecionadas = ["Banana", "Morango"]; 
montaCheckBox($frutas, "fruta_checkbox", true, $selecionadas); 
?>
