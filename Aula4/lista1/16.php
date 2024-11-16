<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="16.php" method="post">
        
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">

        <label for="nascimento">Data de Nascimento:</label>
        <input type="number" id="nascimento" name="nascimento">

        <label for="salarioH">Salário por Hora</label>
        <input type="number" step="0.01" id="salarioH" name="salarioH">

        <label for="aluguel">Aluguel:</label>
        <input type="number" step="0.01" id="aluguel" name="aluguel">

        <button type="submit" >Calcular</button>
    </form>

    <?php 
        if(isset($_POST["nome"]) && ($_POST["nascimento"]) && ($_POST["salarioH"]) && ($_POST["aluguel"])){
            $nome = $_POST["nome"];
            $nascimento = $_POST["nascimento"]; 
            $salario = $_POST["salarioH"]; 
            $aluguel = $_POST["aluguel"];

            define("salariomensal", 200); 
            $nascimento = 2024 - $nascimento; 
            $salario = $salario * salariomensal; 
            $sobra = $salario - $aluguel;
            
            echo "Olá João da Silva, você tem, ".$nascimento." você ganha ".$salario." por mês. Sabendo que seu aluguel é de R$ ".$aluguel. " , lhe resta R$".$sobra;
        }
    ?>
</body>
</html>