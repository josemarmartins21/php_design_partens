<?php
class Produto {
    private $desc;
    private $estoque;
    private $preco;


    public function __construct($desc, $preco, $estoque)
    {
        $this->__setDesc($desc);
        $this->setEstoque($preco);
        $this->setPreco($preco);
    }
    public function aumentarEstoque(int $unidades) {
        if (is_numeric($unidades) AND $unidades >= 0) {
            $this->estoque += $unidades;
        }
    }
    public function diminuirEstoque(int $unidades) {
        if (is_numeric($unidades) AND $unidades >= 0) {
            $this->estoque -= $unidades;
        }
    }
    public function reajustarPreco(int $precentual) {
        if (is_numeric($precentual) AND $precentual > 0) {
            $this->preco *= (1 + ($precentual / 100));
        }
    }

    public function __getEstoque()
    {
        return $this->estoque;
    }

    public function setEstoque(int $estoque)
    {
        if ($estoque >= 0) {
            $this->$estoque = $estoque;
        }
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco(float $preco)
    {
        if (is_float($preco) AND $preco >= 0) {
            $this->preco = $preco;
        }
    }

    public function getDesc(): string
    {
        return $this->desc;
    }

    public function __setDesc(string $desc)
    {
        if (is_string($desc)) {
            $this->desc = $desc;
        }
    }

    public function __destruct()
    {
        echo "Objecto {$this->desc} foi desalocado \n";
    }
}

$p1 = new Produto('Chocolate', 10, 14);
$p2 = new Produto('Café', 15, 14);

print "O produto " . $p1->getDesc() . " com o preço de " . $p1->getPreco() . " e com ". $p1->__getEstoque() . " unidades \n";

unset($p1);
unset($p2);

/* 
$p2 = new Produto;

$p2->__setDesc('Coca Cola Mini');
$p2->setEstoque(10);
$p2->setPreco(12.01);
var_dump($p1);
$p1->aumentarEstoque(10);

$p1->diminuirEstoque(5);

$p1->reajustarPreco(50);
var_dump($p1); */