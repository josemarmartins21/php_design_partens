<?php

declare(strict_types=1);

require_once __DIR__."/StockServiceInterface.php";
require_once __DIR__."/SistemaDeReposicao.php";
require_once __DIR__."/Stock.php";

$stock = new Stock;
$stock->setStock(100);
$sistemaDeReposicao = new SistemaDeReposicao(20);

$stock->add($sistemaDeReposicao);

$stock->refreshStock();
$stock->setStock($sistemaDeReposicao->getNovaQuantidade());
echo $stock->getStock();
