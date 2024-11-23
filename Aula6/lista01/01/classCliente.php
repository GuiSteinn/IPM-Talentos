<?php
class ClassCliente
{
    private $nome;
    private $email;
    private $telefone;


    public function exibir()
    {

        echo "Nome: " . $this->nome . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Telefone: " . $this->telefone . "<br>";

    }


public function getNome(){
    return $this -> nome; 
}

public function getEmail(){
    return $this -> email; 
}

public function getTelefone(){
    return $this -> telefone;
} 

public function setNome($nome) {
    $this -> nome = $nome;
} 

public function setEmail($email){
    $this -> email = $email;
} 

public function setTelefone($telefone){
    $this -> telefone = $telefone;
}
}

class ClassClienteFisica extends ClassCliente {
    private $cpf; 

    public function exibir() {
        parent :: exibir();    
        echo "CPF: ". $this -> cpf. "<br>";        
    }

    public function setCpf($cpf){
        $this -> cpf = $cpf;
    }

}

class ClassClienteJuridica extends ClassClienteFisica {
    private $cnpj; 

        public function exibir(){
            parent :: exibir(); 
            echo "CNPJ: ". $this -> cnpj;
        }

        public function setCnpj($cnpj){
            $this -> cnpj = $cnpj;
        }
        
}
        


?>