<?php 

    if(isset($_POST['nome']) && ($_POST['senha']) ) {

    $nome  = $_POST['nome'];
    $senha = $_POST['senha'];

    if ($nome === 'matheus' && $senha === 'pastel'){
        echo"Realizada com sucesso";
    } else {
        echo "Você não tem permissão de visualizar essa página";
    }
    }

?>