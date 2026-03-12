<?php
class Produto {
    public $desc;
    public $estoque;
    public $preco;


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
}

$p1 = new Produto;

$p1->desc = 'Chocolate';
$p1->estoque = 12;
$p1->preco = 2500;

$p2 = new Produto;

$p2->desc = 'Coca Cola Mini';
$p2->estoque = 10;
$p2->preco = 250;
var_dump($p1);
$p1->aumentarEstoque(10);

$p1->diminuirEstoque(5);

$p1->reajustarPreco(50);
var_dump($p1);