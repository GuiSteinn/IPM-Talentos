<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="13.php" method="post" > 

        <label for="valores">Valores:</label>
        <input type="text" id="valores" name="valores" >

        <button type="submit" >Enviar</button>

    </form>
</body>
</html>




<?php
    if(isset($_POST['valores'])){
        $valores = $_POST['valores']; 

        $vetor = explode(',', $valores);

        echo $valores;


    }
?>  