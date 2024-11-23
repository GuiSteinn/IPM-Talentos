<?php
    require_once 'classUsuario.php';
    class Administrador extends Usuario {

        public function hello(){
            echo "<br> Olá Administrador: ".$this->getNome()."<br>";
        }


    }
?>