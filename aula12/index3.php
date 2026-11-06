<?php 

class Produtos{
    public $nome;
    public $preco;
}

$produto01 = new Produtos();
$produto01->preco = 20;

$produto02 = new Produtos();
$produto02->preco = 10;

$produto03 = new Produtos();
$produto03->preco = 15;

$soma = $produto01->preco + $produto02->preco + $produto03->preco;

echo $soma;
?>