<?php
/* declare(strict_types=1); */
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

class Produto {
    private $desc;
    private $estoque;
    private $preco;
    private $fabricante;

    public function __construct($desc, $estoque, $preco)
    {
        $this->desc = $desc;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function getDesc()
    {
        return $this->desc;
    }

    public function setFabricante(Fabricante $fabricante) {
        $this->fabricante = $fabricante;
    }

    public function getFabricante()
    {
        return $this->fabricante;
    }
}

$p1 = new Produto("chocolate", 10, 7);
$f1 = new Fabricante("Fabrica de chocolate", "933 9965", "Rua tal...");
$p1->setFabricante($f1);

print "O fabricante do produto {$p1->getDesc()} é {$p1->getFabricante()->getNome()}";
/* 
var_dump($f1);
var_dump($p1); */