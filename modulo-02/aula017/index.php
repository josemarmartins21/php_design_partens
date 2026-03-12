<?php
require_once __DIR__."/Fabricante.php";
require_once __DIR__."/Caracteristica.php";
require_once __DIR__."/Produto.php";
require_once __DIR__."/Cesta.php";

$cesta = new Cesta;

$p1 = new Produto("chocolate", 10, 200);
$p2 = new Produto("arroz", 8, 1200);

$cesta->addItem($p1);
$cesta->addItem($p2);

foreach ($cesta->getItems() as $item) {
    print "{$item->getDesc()} - {$item->getPreco()} \n";
}

