<?php

class ContaCorrente extends Conta {
    protected $limite;

    public function __construct($agencia, $conta, $saldo, $limite)
    {
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;
    }

    public function retirar($quantia)
    {
        if ($this->saldo->getSaldo() + $this->limite >= $quantia) {
            $this->saldo->setSaldo($this->saldo->getSaldo() - $quantia) ;
            return true;
        }
        return false;
    }
}