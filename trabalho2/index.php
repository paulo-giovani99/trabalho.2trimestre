<?php
require_once "Pessoa.php";
require_once "Vendedor.php";
require_once "Produto.php";
require_once "ItemPedido";


$pessoa = new Pessoa("Paulo", "14783738378", "masculino", "21/08/2006");

$pessoa->imprimir(); 


$vendedor = new Vendedor("João","14783738354", "masculino", "21/08/2005", "1500", "5");

$vendedor->imprimir(); 

$produto = new Produto("12", "Maça", "R$1500");

$produto->imprimir(); 
 
echo $vendedor->getNome() . '<br>';
echo $vendedor->getCpf() . '<br>';
echo $vendedor->getSexo() . '<br>';
echo $vendedor->getDataNascimento() . '<br>';
echo $vendedor->getSalario() . '<br>';
echo $vendedor->getComissao() . '<br>';

echo $produto->getCodigo() . '<br>';

?>