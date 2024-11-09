<?php
 if(isset($_POST["estrela"])){
    $estrela = $_POST['estrela'];

    for($i= 0;$i < ($estrela); $i++){
        
        echo  '<img src="estrela.png" alt="estrela">';
       
    }
 }
?>