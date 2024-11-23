<?php
    require_once 'classUsuario.php';
    class Cliente extends Usuario {

        public function hello()
    {
        echo "Olá Usuário: " . $this->getNome() . " " . $this->getSobrenome()."<br>"."Seja Bem vindo";
    }

    }

?>