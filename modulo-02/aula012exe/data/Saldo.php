<?php

class Saldo {
    private int $saldo;

    public function __construct(int $saldo)
    {
        try {
            $this->validate($saldo);
            $this->saldo = $saldo;
        } catch (Exception $e) {
            print $e->getMessage();
        }
    }

    
    public function validate(int $saldo)
    {
        if (!($saldo > 0 AND is_numeric($saldo))) {
            throw new Exception("O saldo tem que ser maior que zero e númerico");
        }
    }
    
    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->validate($saldo);
        $this->saldo = $saldo;
    }
}