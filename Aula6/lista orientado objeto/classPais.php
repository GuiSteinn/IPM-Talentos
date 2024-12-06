<?php 
    class Pais {

        private $codigo; 
        private $nome; 
        private $populacao; 
        private $dimensao; 

        public function __construct($codigo, $nome, $dimensao) {
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->dimensao = $dimensao;
        }
    

        public function getCodigo(){
           return $this->codigo;
        } 

        public function getNome(){
            return $this->nome;
        } 

        public function getPopulacao(){
            return $this->populacao;
        } 

        public function getDimensao(){
            return $this->dimensao;
        } 

        public function setCodigo($codigo){
            $this->codigo = $codigo;  
        } 

        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setDimensao($dimensao){
            $this->dimensao = $dimensao;
        } 
        public function setPopulacao($populacao){
            $this->populacao = $populacao;
        }

        public function exibeDados(){
            echo "Código: ".$this->getCodigo()." <br> Nome: ".$this->getNome()." <br> população: ".$this->getPopulacao()." <br> Dimensão: ".$this->getDimensao();
        }


    }

?>