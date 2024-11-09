<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe05</title>
</head>
<body> 
    <form action="05.php" method="post">

    <label for="n1">Nota1:</label>
    <input type="number" id="n1" name="n1" >

    <label for="n2">Nota2:</label>
    <input type="number" id="n2" name="n2" >

    <label for="n3">Nota3:</label>
    <input type="number" id="n3" name="n3" >

    <label for="n4">Nota4:</label>
    <input type="number" id="n4" name="n4" > 

    <button type="submit" >Calcular Média</button> <br>

    <?php 
    if(isset($_POST['n1']) && ($_POST['n2']) && ($_POST['n3']) && ($_POST['n4'])) {
        $n1 = $_POST['n1']; 
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];
        $n4 = $_POST['n4'];
        $media = ($n1 + $n2 + $n3 + $n4)/4; 
        
        if ($media >= 7) {
        echo "Aprovado Média: ".$media;
    } else {
        echo "Reprovado Média: ".$media;
    }
}
    ?>

    
</body>
</html>
</form>