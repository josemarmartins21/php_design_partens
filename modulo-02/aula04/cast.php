<?php
$produto = new StdClass;

$produto->desc = 'Fumbua';
$produto->estoque = 30;
var_dump($produto);

$vetor1 = (array) $produto;

var_dump($vetor1['desc']);

$vetor2 = ['desc' => 'café', 'estoque' => 100];

$produto2 = (object) $vetor2;
print($produto2->desc);