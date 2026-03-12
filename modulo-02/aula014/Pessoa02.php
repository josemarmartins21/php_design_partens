<?php 

class Pessoa02 {
    private $nome;
    private $nascimento;
    private $endereco;
    
}

$pessoa = new Pessoa02;

$pessoa->nome = "Josimar";
$pessoa->nascimento = "Camama";
$pessoa->nascimento = "2005-01-12";

print_r($pessoa);