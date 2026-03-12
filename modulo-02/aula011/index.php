<?php
require_once __DIR__ . "/Conta.php";
require_once __DIR__ . "/ContaCorrente.php";
require_once __DIR__ . "/ContaPoupanca.php";

$p = new ContaPoupanca(145, "999999", 500);
echo $p->getSaldo() . PHP_EOL;
$p->depositar(200);
echo $p->getSaldo();

$p->retirar(100);
echo $p->getSaldo();

/* echo "<pre>";
var_dump($p);  */