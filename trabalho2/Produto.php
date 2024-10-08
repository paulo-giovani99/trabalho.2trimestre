<?php
class Produto {
    private int $codigo;
    private string $nome;
    private  $valor;

    public function __construct($codigo, $nome, $valor)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->valor = $valor;
    }
    public function getItem()
    {
        return $this->codigo;
    }
    public function setItem($codigo)
    {
        $this->codigo = $codigo;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getValor()
    {
        return $this->valor;
    }
    public function setValor($valor)
    {
        $this->valor = $valor;
    }
    public function imprimir($codigo, $nome, $valor) {
        echo $codigo, $nome, $valor;
    }
}