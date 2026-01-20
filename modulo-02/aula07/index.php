<?php
require_once "Produto.php";
require_once "Caracteristica.php";
require_once "Fabricante.php";

$p1 = new Produto("chocolate", 20, 15);
$p1->addCaracteristica('cor', 'branco');
$p1->addCaracteristica('peso', '500gr');

foreach ($p1->getCaracteristicas() as $caracteristica) {
    $nome = $caracteristica->getNome();
    $valor = $caracteristica->getValor();

    print "Caracteristica {$nome} = {$valor}" . PHP_EOL;
}