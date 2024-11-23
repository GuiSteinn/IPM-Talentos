<?php
    require_once 'classCliente.php';

    $oGui = new ClassClienteJuridica();
    
    $oGui -> setNome("Guilherme"); 
    $oGui -> setEmail("guilhermezuninosgrott@gmail.com"); 
    $oGui -> setTelefone("(47) 98565-0179");
    $oGui -> setCpf("084.080.567-42"); 
    $oGui -> setCnpj("843980310001-32");

    $oGui -> exibir();  
?>