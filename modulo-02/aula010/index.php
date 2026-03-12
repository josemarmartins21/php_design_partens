<?php
require_once __DIR__ . "/composicao.php";
require_once __DIR__ . "/Produto.php";


$c = new Cesta();

$p1 = new Produto("chocolate", 20, 35000);
$p2 = new Produto("pão", 14, 1000);
$p3 = new Produto("chá", 2, 5000);

$c->addIem($p1);
$c->addIem($p2);
$c->addIem($p3);

foreach ($c->getItems() as $item) {
    print "Item {$item->getDesc()}\n";
}