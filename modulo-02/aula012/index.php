<?php
require_once __DIR__ . "/Conta.php";
require_once __DIR__ . "/ContaCorrente.php";
require_once __DIR__ . "/ContaPoupanca.php";

$contas = [];

$contas[] = new ContaCorrente("ATLANTICO", "LUA2454585",500, 1000);
$contas[] = new ContaPoupanca("BAI", "LUA2454585",500);

foreach ($contas as $conta) {
    if ($conta instanceof Conta) {
        print $conta->getInfo() . "\n";
        print "-- Saldo: " . $conta->getSaldo() . "\n";
        $conta->depositar(200);
        print "-- Saldo: " . $conta->getSaldo() . "\n";

        if ($conta->retirar(200)) {
            print "Retirada de 300" . "\n";
        } else {
            print "Retirada não permitida" . "\n";
        }

        print $conta->getSaldo();
    }
}