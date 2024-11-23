<?php
require_once 'classContaBancaria.php';
require_once 'classContaPoupanca.php';

$oBanco = new ContaBanco("Guilherme");
$oBanco->setData("23/11/2024");
$oBanco->setSaldoInicial(2000);

$oBanco->sacar(100);
$oBanco->depositar(200);
$oBanco->exibeExtrato();
$oBanco->exibeSaldo();

$oPoupanca = new ContaPoupanca("Guilherme", 1.5); 
$oPoupanca->setSaldoInicial(2000); 
$oPoupanca->adicionarRendimento();
$oPoupanca->exibeExtrato();
$oPoupanca->exibeSaldo();
?>
