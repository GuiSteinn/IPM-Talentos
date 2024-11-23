<?php

    class ContaBancaria{

        private $cliente;
        private $dataCriacao; 
        private $saldoInicial; 
        private $saldoAtual; 
        private $operacoes = [];


        public function getNome(){
            return $this->cliente;
        }

        public function getData(){
          return  $this->dataCriacao;
        }

        public function getSaldoInicial(){
           return $this->saldoInicial; 
        }

        public function setNome($cliente){
            $this->cliente = $cliente;
        }

        public function setData($dataCriacao){
            $this->dataCriacao = $dataCriacao;
        }

        public function setSaldoInicial($saldoInicial){
            $this->saldoInicial = $saldoInicial;
            $saldoInicialTotal = $this->getsaldoAtual() + $saldoInicial;
            $this->setsaldoAtual($saldoInicialTotal);
        }

        public function getsaldoAtual(){
           return $this->saldoAtual;
        }

        public function setsaldoAtual($saldoAtual){
            $this->saldoAtual = $saldoAtual;
        }




        public function sacar($valor){
            $valorTotal = $this->getsaldoAtual() - $valor; 
            $this->setsaldoAtual($valorTotal); 
            echo "Realizado saque do cliente".$this->getNome()."no valor de R$ ".$valor." Saldo atual: R$ ".$this->getsaldoAtual()."<br>";
            $this->operacoes[] = 'Saque';

        } 

        public function depositar($iValor){
            $valorTotal =  $this -> getsaldoAtual() + $iValor;
            $this->setsaldoAtual($valorTotal);
            echo"Realizado depósito para o cliente ".$this->getNome()." no valor de R$ ".$iValor." Saldo atual: ".$this->getsaldoAtual()."<br>";
            $this->operacoes[] = "Depósito";
        }

        public function exibeSaldo(){
            echo "Saldo atual do cliente".$this->getNome()." é: ".$this->getsaldoAtual();
        }

        public function exibeExtrato(){
            foreach($this->operacoes as $valor){
                echo $valor."<br>";
            }
        }


    }

?>