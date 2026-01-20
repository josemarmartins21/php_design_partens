<?php

require_once __DIR__ . "/data/Agencia.php";
require_once __DIR__ . "/data/Saldo.php";
require_once __DIR__ . "/data/NumeroConta.php";
require_once __DIR__ . "/Conta.php";
require_once __DIR__ . "/ContaCorrente.php";

$cp = new ContaCorrente("Atl", "adsfd8", 200, 100);

var_dump($cp->getSaldo()->getSaldo());