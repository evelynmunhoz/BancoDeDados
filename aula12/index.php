<?php

class Pessoa{
    public $nome;
    public $idade;
}

$pessoa = new Pessoa();

$pessoa->nome = "Platini";
$pessoa->idade = 23;

echo "$pessoa->nome\n";
echo "$pessoa->idade\n";

$aluno = new Pessoa();

$aluno->nome = "Daniel";
$aluno->idade = 17;

echo "$aluno->nome\n";
echo "$aluno->idade\n";



