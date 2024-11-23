<?php
require_once 'classProfessor.php';

class ProfessorRegime extends Professor {
    private const SALARIO_FIXO = 5000;

    public function __construct($matricula, $nome) {
        parent::__construct($matricula, $nome, 40);
        $this->salario = self::SALARIO_FIXO;
    }

    public function calculaSalario() {
        return $this->salario;
    }
}
?>
