<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="12.php" method="post" >

        <label for="raio">Informe o Raio</label>
        <input type="number" step="0.01" id="raio" name="raio">

        <button type="submit" >Area</button>

    </form>
</body>
</html>





<?php
 if(isset($_POST['raio'])){
    $r    = $_POST['raio'];
    $pi   = 3.14159;
    $area = $pi * ($r*$r);

    echo $area;
 }


?>