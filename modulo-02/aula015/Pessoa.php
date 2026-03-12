<?php 

class Pessoa {
    public $nome;
    public $nascimento;
    public $endereco;
}

$pessoa = new Pessoa;

$pessoa->nome = "Josimar";
$pessoa->nascimento = "Camama";
$pessoa->nascimento = "2005-01-12";

print_r($pessoa);