<?php
// Inclui o arquivo com as funções
include_once("index.php");

// Define o array de frutas
$frutas = array("Banana", "Maçã", "Abacaxi", "Tomate", "Morango", "Pastel", "Limão", "Abacate", "Melão");

// Chama a função para gerar o select
echo "<h3>Exemplo com valores como texto:</h3>";
echo montaSelect($frutas, "frutasTexto", true);

echo "<h3>Exemplo com valores como sequenciais:</h3>";
echo montaSelect($frutas, "frutasSequencial", false);
?>
