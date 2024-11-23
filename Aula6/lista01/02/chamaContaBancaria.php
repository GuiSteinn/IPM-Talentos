<?php
    require_once 'classContaBancaria.php'; 
    
    $oBanco = new ContaBancaria(); 

    $oBanco -> setNome("Guilherme"); 
    $oBanco -> setData("23/11/2024"); 
    $oBanco -> setSaldoInicial("2000"); 

    $oBanco -> sacar(100); 
    $oBanco -> depositar(200); 
    $oBanco -> exibeExtrato(); 
    $oBanco -> exibeSaldo(); 
    

?>