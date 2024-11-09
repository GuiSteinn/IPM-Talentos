<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe04</title>
</head>
<body>
    <form action="04.php" method="post" >

    <label for="v1">campo1:</label>
    <input type="text" id="v1" name="v1" >

    <label for="v2">campo2</label>
    <input type="text" id="v2" name="v2" > 

    <button type="submit" >Enviar</button> <br>

    <?php
        if(isset($_POST['v1']) && ($_POST['v2'] )) {
            $v1 = $_POST['v1'];
            $v2 = $_POST['v2'];
            $contador = substr_count($v1,$v2);

            echo "Na frase ".$v1. " o carcter ".$v2." aparece: ".$contador;
        }

    ?>
    
</body>
</html>
</form>