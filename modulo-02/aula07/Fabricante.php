<?php

class Fabricante {
    private $nome;
    private $doc;
    private $endereco;

    public function __construct($nome, $doc, $endereco)
    {
        $this->endereco = $endereco;
        $this->doc = $doc;
        $this->nome = $nome;
    }


    public function getNome()
    {
        return $this->nome;
    }
}