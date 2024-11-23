<?php
require_once 'classProfessor.php';

class ProfessorHorista extends Professor {
    private $salarioHora;

    public function __construct($matricula, $nome, $cargaHoraria, $salarioHora) {
        parent::__construct($matricula, $nome, $cargaHoraria);
        $this->salarioHora = $salarioHora;
    }

    public function calculaSalario() {
        $this->salario = $this->cargaHoraria * $this->salarioHora;
        return $this->salario;
    }
}
?>
