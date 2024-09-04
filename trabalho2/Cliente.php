<?php

require_once "Pessoa.php";

class Cliente extends Pessoa {
    private  $dataCadastro;
    private  $preferencias;

    public function __construct( $nome, $cpf, $sexo, $dataNascimento, $preferencias, $dataCadastro, ) {
       parent::__construct($nome, $cpf, $sexo, $dataNascimento);
       $this->dataCadastro = $dataCadastro;
       $this->preferencias = $preferencias;       
    }

    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }
    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;
    }
    public function getPreferencias()
    {
        return $this->preferencias;
    }
    public function setPreferencias($preferencias)
    {
        $this->preferencias = $preferencias;
    }

    public function imprimir() {
      
        echo $this->dataCadastro. "<br>";
        echo $this->preferencias . "<br>";
    }
}