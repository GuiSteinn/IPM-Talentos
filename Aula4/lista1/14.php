<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="14.php" method="post" >
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario">

        <label for="senha">senha:</label> 
        <input type="password" id="senha" name="senha">

        <button type="submit" >Confirmar</button>
    </form>

<?php 
    if(isset($_POST["usuario"]) && $_POST["senha"]){
        $usuario = $_POST["usuario"]; 
        $senha = $_POST["senha"];

        if($usuario == "$senha" && $senha == "$usuario"){
            echo"Erro de autenticação usuário e senha não podem ser iguais";
    } else{
        echo "Acesso autorizado";
    }
}
?>
</body>
</html>