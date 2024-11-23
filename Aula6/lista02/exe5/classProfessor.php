<?php
abstract class Professor {
    protected $matricula;
    protected $nome;
    protected $cargaHoraria;
    protected $salario;

    public function __construct($matricula, $nome, $cargaHoraria) {
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->cargaHoraria = $cargaHoraria;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCargaHoraria() {
        return $this->cargaHoraria;
    }

    public function getSalario() {
        return $this->salario;
    }

    // Método abstrato que será implementado nas subclasses
    abstract public function calculaSalario();
}
?>
