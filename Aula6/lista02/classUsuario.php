<?php
    require_once 'classAdministrador.php';
class Usuario
{
    private $nome;
    private $sobrenome;

    public function getNome()
    {
        return $this->nome;
    }

    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setSobreNome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    public function hello()
    {
        echo "Olá Usuário: " . $this->getNome() . " " . $this->getSobrenome();
    }

}


?>