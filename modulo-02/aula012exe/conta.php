<?php

class Conta {
    protected Agencia $agencia;
    protected NumeroConta $conta;
    protected Saldo $saldo;

    public function __construct($agencia, $conta, $saldo)
    {
        $this->agencia = new Agencia($agencia);
        $this->conta = new NumeroConta($conta);
        if ($saldo > 0) {
            $this->saldo = new Saldo($saldo);
        }
    }

    public function depositar($quantia): void
    {
        if ($quantia > 0) {
            $this->saldo->setSaldo($quantia + $this->saldo->getSaldo());
        }
    }

    public function getSaldo(): Saldo
    {
        return $this->saldo;
    }
}