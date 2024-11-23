<?php
require_once 'classProfessorRegime.php';
require_once 'classProfessorH.php';
require_once 'classProfessor.php'; 


$profRegime = new ProfessorRegime(123, "Cristhian");
echo "Professor em Regime: " . $profRegime->getNome() . "<br>";
echo "Salário: R$ " . $profRegime->calculaSalario() . "<br><br>";

$profHorista = new ProfessorHorista(456, "Samuca Viga", 20, 50);
echo "Professor Horista: " . $profHorista->getNome() . "<br>";
echo "Salário: R$ " . $profHorista->calculaSalario() . "<br>";
?>
