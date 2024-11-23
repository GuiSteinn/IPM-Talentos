<?php 
    require_once 'classUsuario.php';
    require_once 'classAdministrador.php'; 
    require_once 'classCliente.php';


    $oUsuario = new Usuario();
    $oUsuario->setNome("Guilherme");
    $oUsuario->setSobreNome("Stein");
    $oUsuario->hello();

    $oAdm = new Administrador();
    $oAdm->setNome("Guilherme");
    $oAdm->hello();

    $oCliente = new Cliente();
    $oCliente->setNome("Guilherme");
    $oCliente->setSobreNome("Stein");
    $oCliente->hello();


    
?>