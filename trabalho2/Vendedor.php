<?php

require_once "Pessoa.php";

class Vendedor extends Pessoa {
    private  $salario;
    private  $comissao;

    public function __construct($nome, $cpf, $sexo, $dataNascimento, $salario, $comissao) {
       parent::__construct($nome, $cpf, $sexo, $dataNascimento);
       $this->salario = $salario;
       $this->comissao = $comissao;       
    }

    public function getSalario()
    {
        return $this->salario;
    }
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }
    public function getComissao()
    {
        return $this->comissao;
    }
    public function setComissao($comissao)
    {
        $this->comissao = $comissao;
    }
    public function imprimir() {
        echo $this->salario. "<br>";
        echo $this->comissao . "<br>";
    }
}