<?php
class Produto {
    public $desc;
    public $estoque;
    public $preco;
}

$p1 = new Produto;

$p1->desc = 'Chocolate';
$p1->estoque = 12;
$p1->preco = 2500;

$p2 = new Produto;

$p2->desc = 'Coca Cola Mini';
$p2->estoque = 10;
$p2->preco = 250;
print $p1->desc;

var_dump($p1);
var_dump($p2);