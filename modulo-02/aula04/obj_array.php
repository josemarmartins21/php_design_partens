<?php

$produto = [];
$produto['desc'] = 'Chocoloate';
$produto['estoque'] = 100;
$produto['preco'] = 150;

$objecto = new stdClass;

foreach ($produto as $chave => $valor) {
    $objecto->chave = $valor;
}

var_dump($objecto);
// $objecto = (object) $produto;