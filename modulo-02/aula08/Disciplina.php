<?php

class Disciplina {
    private $nome;
    static $nota_min;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }
}
