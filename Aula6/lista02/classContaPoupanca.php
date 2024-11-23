<?php
    require_once 'classContaBancaria.php';
    class ContaPoupanca extends ContaBanco {
        private $taxa;
    
        public function __construct($cliente, $taxa) {
            parent::__construct($cliente); 
            $this->taxa = $taxa;
        }
    
        public function getTaxa() {
            return $this->taxa;
        }
    
        public function setTaxa($taxa) {
            $this->taxa = $taxa;
        }
    
        public function adicionarRendimento() {
            $rendimento = $this->getsaldoAtual() * ($this->taxa / 100); 
            $novoSaldo = $this->getsaldoAtual() + $rendimento; 
            $this->setsaldoAtual($novoSaldo);
        
            $this->addOperacao('rendimento ');
        
            echo " Rendimento de R$ " . $rendimento . " adicionado ao saldo. Saldo atual: R$ " . $novoSaldo . "<br>";

        }

    }
    ?>