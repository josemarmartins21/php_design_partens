<?php


class Pessoa {
    private $nome;
    private $genero;
    const GENEROS = [
        "M" => "Masculino", 
        "F" => "Femenino"
    ];

    public function __construct($nome, $genero)
    {
        $this->nome = $nome;
        $this->genero = $genero;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getNomeGenero()
    {
        return self::GENEROS[$this->genero];
    }
}


$p1 = new Pessoa("José", "M");
$p2 = new Pessoa("Teresa", "F");


print $p1->getNome() . " " . $p1->getNomeGenero(). PHP_EOL;
